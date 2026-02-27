<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Update | Coming Soon</title>
    <style>
        :root {
            --primary-color: #00d2ff;
            --secondary-color: #3a7bd5;
            --bg-dark: #0f172a;
            --glass-bg: rgba(255, 255, 255, 0.05);
            --text-light: #f8fafc;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: var(--text-light);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        /* Ambient background glow */
        body::before {
            content: "";
            position: absolute;
            width: 300px;
            height: 300px;
            background: var(--secondary-color);
            filter: blur(150px);
            opacity: 0.2;
            top: 10%;
            left: 10%;
            z-index: 0;
        }

        .glass-card {
            position: relative;
            z-index: 1;
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 3rem 2rem;
            border-radius: 24px;
            text-align: center;
            max-width: 450px;
            width: 90%;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .status-badge {
            display: inline-block;
            background: rgba(0, 210, 255, 0.1);
            color: var(--primary-color);
            padding: 6px 16px;
            border-radius: 100px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: 1px solid rgba(0, 210, 255, 0.3);
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            background: linear-gradient(to right, #fff, #94a3b8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        p {
            color: #94a3b8;
            line-height: 1.6;
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }

        .pulse {
            display: inline-block;
            width: 8px;
            height: 8px;
            background-color: var(--primary-color);
            border-radius: 50%;
            margin-right: 8px;
            box-shadow: 0 0 0 rgba(0, 210, 255, 0.4);
            animation: pulse-animation 2s infinite;
        }

        @keyframes pulse-animation {
            0% { box-shadow: 0 0 0 0 rgba(0, 210, 255, 0.7); }
            70% { box-shadow: 0 0 0 15px rgba(0, 210, 255, 0); }
            100% { box-shadow: 0 0 0 0 rgba(0, 210, 255, 0); }
        }

        footer {
            margin-top: 2rem;
            font-size: 0.8rem;
            color: #64748b;
        }
    </style>
</head>
<body>

    <div class="glass-card">
        <div class="status-badge">
            <span class="pulse"></span>In Progress
        </div>
        <h1>Under Construction</h1>
        <p>Working on the project now. I'll get back to you with updates very soon.</p>
        
        <footer>
            &copy; <?php echo date("Y"); ?> &bull; Project Dashboard
        </footer>
    </div>

</body>
</html>