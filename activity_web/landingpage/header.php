<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glow Salon</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .hero {
            height: 100vh;
            /* Adjust this path to match where your salon image is located */
            background-image: url('../login/image/login/salon.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: center;
        }

        .overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.4);
        }

        .content {
            position: relative;
            color: white;
        }

        .content h1 {
            font-size: 50px;
            font-weight: bold;
        }

        .content p {
            font-size: 17px;
            max-width: 600px;
        }

        .navbar {
            background: rgba(0, 0, 0, 0.3);
        }

        .about {
            background: #f8eeee;
        }

        .about-img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 15px;
        }

        .services {
            background: #f3dddd;
        }

        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }

        .card-img-top {
            height: 220px;
            object-fit: cover;
        }

        footer {
            background: #3d2929;
            color: white;
        }

        @media (max-width: 768px) {
            .content {
                padding: 20px;
            }

            .content h1 {
                font-size: 38px;
            }

            .content p {
                font-size: 15px;
            }
        }
    </style>