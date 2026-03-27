import { Handler } from "@netlify/functions";
import nodemailer from "nodemailer";

export const handler: Handler = async (event, context) => {
  // Only allow POST requests
  if (event.httpMethod !== "POST") {
    return {
      statusCode: 405,
      body: JSON.stringify({ error: "Method Not Allowed" }),
    };
  }

  try {
    const { name, phone, email, serviceType, from, to, message } = JSON.parse(event.body || "{}");

    if (!name || !phone || !email) {
      return {
        statusCode: 400,
        body: JSON.stringify({ error: "Name, phone, and email are required." }),
      };
    }

    // Configure SMTP transporter
    const transporter = nodemailer.createTransport({
      host: process.env.SMTP_HOST || "smtp.gmail.com",
      port: parseInt(process.env.SMTP_PORT || "587"),
      secure: false,
      auth: {
        user: process.env.SMTP_USER,
        pass: process.env.SMTP_PASS,
      },
    });

    const mailOptions = {
      from: `"${name}" <${process.env.SMTP_USER || "sareetareeq@gmail.com"}>`,
      to: "sareetareeq@gmail.com",
      replyTo: email,
      subject: `New Moving Quote Request from ${name}`,
      text: `
        New Quote Request Details:
        --------------------------
        Name: ${name}
        Phone: ${phone}
        Email: ${email}
        Service Type: ${serviceType || "Not specified"}
        Moving From: ${from || "Not specified"}
        Moving To: ${to || "Not specified"}
        Message: ${message || "No message provided"}
      `,
      html: `
        <h3>New Quote Request Details:</h3>
        <p><strong>Name:</strong> ${name}</p>
        <p><strong>Phone:</strong> ${phone}</p>
        <p><strong>Email:</strong> ${email}</p>
        <p><strong>Service Type:</strong> ${serviceType || "Not specified"}</p>
        <p><strong>Moving From:</strong> ${from || "Not specified"}</p>
        <p><strong>Moving To:</strong> ${to || "Not specified"}</p>
        <p><strong>Message:</strong> ${message || "No message provided"}</p>
      `,
    };

    // Only send if SMTP credentials are provided
    if (process.env.SMTP_USER && process.env.SMTP_PASS) {
      await transporter.sendMail(mailOptions);
      return {
        statusCode: 200,
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ success: true, message: "Email sent successfully." }),
      };
    } else {
      console.warn("SMTP credentials missing in Netlify environment.");
      return {
        statusCode: 200,
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ 
          success: true, 
          message: "Form submitted successfully (Simulation mode).",
          warning: "Please configure SMTP_USER and SMTP_PASS in Netlify environment variables to receive real emails."
        }),
      };
    }
  } catch (error) {
    console.error("Error sending email:", error);
    return {
      statusCode: 500,
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ error: "Failed to send email. Please try again later." }),
    };
  }
};
