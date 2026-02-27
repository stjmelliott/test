<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Update | Working Hard 🚀</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f2f5;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        .project-card {
            background: #ffffff;
            border: none;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            max-width: 550px;
            width: 100%;
            overflow: hidden;
        }
        .card-accent {
            height: 8px;
            background: linear-gradient(90deg, #0d6efd, #00d2ff);
        }
        .icon-box {
            font-size: 4rem;
            color: #0d6efd;
            margin-bottom: 1.5rem;
        }
        .status-pill {
            font-size: 0.85rem;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .btn-contact {
            border-radius: 10px;
            padding: 12px 25px;
            transition: all 0.3s ease;
        }
        .btn-contact:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(13, 110, 253, 0.3);
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center">
    <div class="project-card">
        <div class="card-accent"></div>
        <div class="card-body p-5 text-center">
            
            <div class="icon-box">
                <i class="fa-solid fa-laptop-code"></i>
            </div>

            <span class="badge rounded-pill bg-light text-primary status-pill border px-3 py-2 mb-4">
                <i class="fa-solid fa-gears fa-spin me-2"></i> Under Construction 🛠️
            </span>

            <h1 class="fw-bold mb-3">Project in Progress 🚀</h1>
            
            <p class="text-muted mb-4 fs-5">
                I'm currently building something great! I'll be back online with updates shortly. 👨‍💻
            </p>

            <div class="progress mb-4" style="height: 12px; border-radius: 10px;">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" 
                     role="progressbar" 
                     style="width: 75%" 
                     aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>

            <hr class="my-4">

            <div class="d-grid gap-2">
                <a href="mailto:selliott@strongtco.com" class="btn btn-primary btn-contact fw-bold">
                    <i class="fa-solid fa-envelope me-2"></i> Get in Touch
                </a>
            </div>

            <footer class="mt-4">
                <p class="small text-secondary mb-0">
                    &copy; <?php echo date("Y"); ?> StrongTCO. All rights reserved. ✨
                </p>
            </footer>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>