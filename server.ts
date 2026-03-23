import express from "express";
import { createServer as createViteServer } from "vite";
import path from "path";
import nodemailer from "nodemailer";
import dotenv from "dotenv";

dotenv.config();

async function startServer() {
  const app = express();
  const PORT = 3000;

  app.use(express.json());

  // API route for contact form
  app.post("/api/contact", async (req, res) => {
    const { name, phone, email, serviceType, from, to, message } = req.body;

    if (!name || !phone || !email) {
      return res.status(400).json({ error: "Name, phone, and email are required." });
    }

    try {
      // Configure SMTP transporter
      const transporter = nodemailer.createTransport({
        host: process.env.SMTP_HOST || "smtp.gmail.com",
        port: parseInt(process.env.SMTP_PORT || "587"),
        secure: false, // true for 465, false for other ports
        auth: {
          user: process.env.SMTP_USER,
          pass: process.env.SMTP_PASS,
        },
      });

      const mailOptions = {
        from: `"${name}" <${process.env.SMTP_USER || "anaskhan52650@gmail.com"}>`,
        to: "anaskhan52650@gmail.com",
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
        res.json({ success: true, message: "Email sent successfully." });
      } else {
        console.warn("SMTP credentials missing. Email not sent. Logging to console instead.");
        console.log("Mail Content:", mailOptions);
        res.json({ 
          success: true, 
          message: "SMTP credentials missing. Form data logged to server console.",
          warning: "Please configure SMTP_USER and SMTP_PASS in environment variables to receive emails."
        });
      }
    } catch (error) {
      console.error("Error sending email:", error);
      res.status(500).json({ error: "Failed to send email. Please try again later." });
    }
  });

  // Vite middleware for development
  if (process.env.NODE_ENV !== "production") {
    const vite = await createViteServer({
      server: { middlewareMode: true },
      appType: "spa",
    });
    app.use(vite.middlewares);
  } else {
    const distPath = path.join(process.cwd(), "dist");
    app.use(express.static(distPath));
    app.get("*", (req, res) => {
      res.sendFile(path.join(distPath, "index.html"));
    });
  }

  app.listen(PORT, "0.0.0.0", () => {
    console.log(`Server running on http://localhost:${PORT}`);
  });
}

startServer();
