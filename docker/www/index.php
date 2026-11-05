<?php echo "--- Chill ----\n"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> A Diplomatic Engineer </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #111213;
            color: #e0f4f4;
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* NAVIGATION */

        .navbar {
            height: 55px;
            width: 100%;
            padding: 0 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(255,255,255,0.04);
            position: relative;
            z-index: 10;
        }

        .social-links,
        .nav-actions {
            display: flex;
            align-items: center;
            gap: 17px;
        }

        .social-links a,
        .nav-actions a {
            color: #dff5f4;
            text-decoration: none;
            font-size: 12px;
            opacity: 0.85;
            transition: 0.3s;
        }

        .social-links a:hover,
        .nav-actions a:hover {
            opacity: 0.5;
        }

        .brand {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-size: 15px;
            font-weight: 900;
            letter-spacing: -1px;
        }

        .menu-icon {
            font-size: 20px !important;
        }

        /* HERO SECTION */

        .hero {
            min-height: calc(100vh - 55px);
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 60px 20px;
        }

        .hero-content {
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .hero-title {
            color: #e0f5f5;
            font-size: clamp(55px, 8vw, 100px);
            line-height: 0.98;
            letter-spacing: -5px;
            font-weight: 900;
        }

        .hero-title .line {
            display: block;
            margin-bottom: 10px;
        }

        .creative {
            position: relative;
            display: inline-block;
            padding: 0 8px;
            z-index: 1;
        }

        /* HAND-DRAWN OVAL */

        .creative svg {
            position: absolute;
            width: 112%;
            height: 125%;
            left: -6%;
            top: -12%;
            overflow: visible;
            z-index: -1;
        }

        .creative svg path {
            fill: none;
            stroke: #789b9e;
            stroke-width: 1.4;
        }

        /* SIDE TEXT */

        .side-text {
            position: absolute;
            font-size: 11px;
            line-height: 1.35;
            font-weight: 500;
            color: #dce9e9;
            width: 145px;
        }

        .left-text {
            top: 40px;
            left: 5.2%;
        }

        .right-text {
            right: 5.2%;
            bottom: 85px;
        }

        .right-text .talk {
            display: inline-block;
            margin-top: 20px;
            color: #e0f5f5;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 0.5px;
            text-decoration: none;
        }

        /* PAPER PLANE */

        .plane {
            position: absolute;
            bottom: 20px;
            left: 7%;
            width: 65px;
            opacity: 0.85;
        }

        .plane svg {
            width: 100%;
        }

        .plane path {
            fill: none;
            stroke: #88b7ba;
            stroke-width: 1;
        }

        /* RESPONSIVE DESIGN */

        @media (max-width: 768px) {

            .navbar {
                padding: 0 15px;
            }

            .social-links {
                gap: 10px;
            }

            .hero {
                min-height: calc(100vh - 55px);
                padding: 100px 15px;
            }

            .hero-title {
                font-size: clamp(48px, 11vw, 75px);
                letter-spacing: -3px;
            }

            .side-text {
                font-size: 9px;
                width: 110px;
            }

            .left-text {
                top: 20px;
                left: 5%;
            }

            .right-text {
                bottom: 35px;
                right: 5%;
            }

            .plane {
                width: 45px;
                left: 5%;
                bottom: 15px;
            }
        }

        @media (max-width: 480px) {

            .social-links {
                gap: 8px;
            }

            .social-links a {
                font-size: 10px;
            }

            .brand {
                font-size: 13px;
            }

            .hero-title {
                font-size: 48px;
                letter-spacing: -2.5px;
            }

            .side-text {
                font-size: 8px;
                width: 100px;
            }

            .left-text {
                top: 25px;
            }

            .right-text {
                bottom: 55px;
            }

            .plane {
                display: none;
            }
        }

    </style>
</head>

<body>

    <!-- NAVIGATION -->

    <nav class="navbar">

        <div class="social-links">
            <a href="#" aria-label="Instagram">◎</a>
            <a href="#" aria-label="Twitter">♥</a>
            <a href="#" aria-label="LinkedIn">▣</a>
            <a href="#" aria-label="Dribbble">◉</a>
        </div>

        <div class="brand">
            <?php echo htmlspecialchars($brand); ?>
        </div>

        <div class="nav-actions">
            <a href="#" aria-label="Shopping cart">♧</a>
            <a href="#" aria-label="Account">◉</a>
            <a href="#" class="menu-icon" aria-label="Menu">☰</a>
        </div>

    </nav>


    <!-- HERO SECTION -->

    <main class="hero">

        <!-- LEFT DESCRIPTION -->

        <div class="side-text left-text">
            We are a forward-thinking
            team of designers and
            developers driven by
            passion — and fuelled by
            curiosity.
        </div>


        <!-- CENTER HEADING -->

        <div class="hero-content">

            <h1 class="hero-title">

                <span class="line">We're a</span>

                <span class="line">
                    <span class="creative">
                        creative

                        <svg viewBox="0 0 300 100"
                             preserveAspectRatio="none">
                            <path d="M15,50 C10,5 80,5 150,12
                                     C220,2 290,5 290,50
                                     C290,95 220,92 150,88
                                     C80,98 10,95 15,50 Z"/>
                        </svg>
                    </span>
                </span>

                <span class="line">digital</span>

                <span class="line">studio.</span>

            </h1>

        </div>


        <!-- RIGHT DESCRIPTION -->

        <div class="side-text right-text">

            We believe that the human
            dimension is essential to start
            any successful project and
            that this is where splendid
            emotional relationships
            between the company and
            people are born.

            <br>

            <a href="mailto:hello@example.com" class="talk">
                LET'S TALK
            </a>

        </div>


        <!-- PAPER PLANE ILLUSTRATION -->

        <div class="plane">

            <svg viewBox="0 0 100 100">

                <path d="M5 25 L95 10 L45 55 Z"/>
                <path d="M45 55 L95 10 L60 85 L45 55 Z"/>
                <path d="M45 55 L30 90 L35 60"/>
                <path d="M30 90 Q25 96 35 100"/>

            </svg>

        </div>

    </main>

</body>
</html>

