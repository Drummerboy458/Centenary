<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>南开一百周年倒计时</title>
    <link rel="shortcut icon" href=<?php echo Yii::$app->urlManager->createUrl('images/logo1.png'); ?>>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Aleo");

        :root {
            font-family: "Aleo", sans-serif;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
            background: rgb(119, 13, 13);
            background: radial-gradient( circle, rgba(119, 13, 13, 0.92) 64%, rgba(0, 0, 0, 0.6) 100% );
        }

        canvas {
            width: 100%;
            height: 100%;
        }


        .label {
            font-size: 2.2rem;
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            animation: moveBg 30s linear infinite;
        }

        @keyframes moveBg {
            0% {
                background-position: 0% 30%;
            }

            100% {
                background-position: 1000% 500%;
            }
        }

        .middle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            user-select: none;
        }

        .time {
            color: #d99c3b;
            text-transform: uppercase;
            display: flex;
            justify-content: center;
        }

            .time span {
                padding: 0 14px;
                font-size: 0.8rem;
            }

                .time span div {
                    font-size: 3rem;
                }

        @media (max-width: 740px) {
            .label {
                font-size: 1.7rem;
            }

            .time span {
                padding: 0 16px;
                font-size: 0.6rem;
            }

                .time span div {
                    font-size: 2rem;
                }
        }
    </style>
</head>
<body>
    <div class="middle">
        <h1 class="label">New Year Countdown </h1>
        <div class="time">
            <span>
                <div id="d">
                    00
                </div>
                Days
            </span> <span>
                <div id="h">
                    00
                </div>
                Hours
            </span> <span>
                <div id="m">
                    00
                </div>
                Minutes
            </span> <span>
                <div id="s">
                    00
                </div>
                Seconds
            </span>
        </div>
    </div>

    <script>
class Snowflake {
    constructor() {
        this.x = 0;
        this.y = 0;
        this.vx = 0;
        this.vy = 0;
        this.radius = 0;
        this.alpha = 0;

        this.reset();
    }

    reset() {
        this.x = this.randBetween(0, window.innerWidth);
        this.y = this.randBetween(0, -window.innerHeight);
        this.vx = this.randBetween(-3, 3);
        this.vy = this.randBetween(2, 5);
        this.radius = this.randBetween(1, 4);
        this.alpha = this.randBetween(0.1, 0.9);
    }

    randBetween(min, max) {
        return min + Math.random() * (max - min);
    }

    update() {
        this.x += this.vx;
        this.y += this.vy;

        if (this.y + this.radius > window.innerHeight) {
            this.reset();
        }
    }
}

class Snow {
    constructor() {
        this.canvas = document.createElement("canvas");
        this.ctx = this.canvas.getContext("2d");

        document.body.appendChild(this.canvas);

        window.addEventListener("resize", () => this.onResize());
        this.onResize();
        this.updateBound = this.update.bind(this);
        requestAnimationFrame(this.updateBound);

        this.createSnowflakes();
    }

    onResize() {
        this.width = window.innerWidth;
        this.height = window.innerHeight;
        this.canvas.width = this.width;
        this.canvas.height = this.height;
    }

    createSnowflakes() {
        const flakes = window.innerWidth / 4;

        this.snowflakes = [];

        for (let s = 0; s < flakes; s++) {
            this.snowflakes.push(new Snowflake());
        }
    }

    update() {
        this.ctx.clearRect(0, 0, this.width, this.height);

        for (let flake of this.snowflakes) {
          flake.update();

          this.ctx.save();
          this.ctx.fillStyle = "#FFF";
          this.ctx.beginPath();
          this.ctx.arc(flake.x, flake.y, flake.radius, 0, Math.PI * 2);
          this.ctx.closePath();
          this.ctx.globalAlpha = flake.alpha;
          this.ctx.fill();
          this.ctx.restore();
        }
    requestAnimationFrame(this.updateBound);
}
        }

new Snow();


        ////////////////////////////////////////////////////////////

        const comingdate = new Date("Oct 17, 2019 00:00:00");

        const d = document.getElementById("d");
        const h = document.getElementById("h");
        const m = document.getElementById("m");
        const s = document.getElementById("s");

        const countdown = setInterval(() => {
        const now   = new Date();
        const des   = comingdate.getTime() - now.getTime();
        const days  = Math.floor(des / (1000 * 60 * 60 * 24));
        const hours = Math.floor((des % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const mins  = Math.floor((des % (1000 * 60 * 60)) / (1000 * 60));
        const secs  = Math.floor((des % (1000 * 60)) / 1000);

        d.innerHTML = getTrueNumber(days);
        h.innerHTML = getTrueNumber(hours);
        m.innerHTML = getTrueNumber(mins);
        s.innerHTML = getTrueNumber(secs);

        if (x <= 0) clearInterval(x);
        }, 1000);

        const getTrueNumber = x => (x < 10 ? "0" + x : x);
    </script>
</body>
</html>