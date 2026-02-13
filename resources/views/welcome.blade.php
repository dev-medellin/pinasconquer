<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PinasCO | Under Maintenance</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      margin: 0;
      min-height: 100vh;
      background: linear-gradient(180deg, #00111f, #020617);
      display: flex;
      align-items: center;
      justify-content: center;
      color: #e5e7eb;
    }

    .container {
      text-align: center;
      padding: 48px 20px;
      max-width: 520px;
    }

    .logo {
      max-width: 260px;
      width: 100%;
      margin-bottom: 24px;
      filter: drop-shadow(0 12px 30px rgba(0,0,0,0.7));
    }

    .badge {
      display: inline-block;
      background: #b91c1c;
      color: #fff;
      padding: 6px 16px;
      border-radius: 999px;
      font-size: 0.8rem;
      letter-spacing: 1px;
      margin-bottom: 16px;
    }

    h1 {
      font-size: 2rem;
      margin: 10px 0 14px;
    }

    .message {
      font-size: 1rem;
      line-height: 1.6;
      opacity: 0.9;
      margin-bottom: 30px;
    }

    .message strong {
      color: #22c55e;
    }

    .tabs {
      display: flex;
      gap: 14px;
      justify-content: center;
      flex-wrap: wrap;
      margin-bottom: 30px;
    }

    .tab {
      padding: 14px 26px;
      border-radius: 999px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.25s ease;
      border: 2px solid transparent;
    }

    .facebook {
      background: #1877f2;
      color: #fff;
    }

    .discord {
      background: #5865f2;
      color: #fff;
    }

    .tab:hover {
      transform: translateY(-2px) scale(1.03);
      box-shadow: 0 10px 30px rgba(0,0,0,0.45);
    }

    footer {
      font-size: 0.85rem;
      opacity: 0.7;
    }

    .flag {
      margin-top: 10px;
      font-size: 0.9rem;
      letter-spacing: 0.5px;
      opacity: 0.85;
    }
  </style>
</head>
<body>
  <div class="container">
    <img
      src="/assets/logo1.png"
      alt="PinasCO Logo"
      class="logo"
    />

    <div class="badge">MAINTENANCE MODE</div>

    <h1>Server Under Maintenance</h1>

    <div class="message">
      Kamusta, warriors! 🇵🇭<br /><br />
      <strong>PinasCO Classic PvP</strong> is currently undergoing maintenance to improve server stability, balance, and overall gameplay experience.
      <br /><br />
      We’ll be back online soon. Salamat sa inyong pasensya and thank you for supporting the Philippine CO community!
    </div>

    <div class="tabs">
      <a href="#" target="_blank" class="tab facebook">Facebook Page</a>
      <a href="#" target="_blank" class="tab discord">Discord Server</a>
    </div>

    <footer>
      © 2026 PinasCO Classic PvP
      <div class="flag">Proudly Filipino • Classic PvP • Since the Old Days</div>
    </footer>
  </div>
</body>
</html>
