<head>
<script src="https://kit.fontawesome.com/54170d867a.js" crossorigin="anonymous"></script>
<style>

@import url('https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&family=PT+Serif&family=Roboto:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&family=PT+Serif&family=Roboto:wght@100;300&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .bar {
        height: 60px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 30px;
        font-family: PT Serif;        
        font-size: 20px;
        border-bottom: 1px solid #E6E6FA;
    }

    .btn-skip span {
        padding: 10px;
        font-family: Roboto;
    }

    .btn-skip a {
        text-decoration: none;
        color: black;
        font-family: Roboto;
        transition: 0.5s;
    }

    .btn-skip a:hover {
        transition: 0.5s;
        text-shadow: 1px 1px 2px gray;
    }
    
</style>
</head>
<body>
    <header class="bar">
        <div class="logo">
            <h2>TechShop Web</h2>
        </div>
        <div class="btn-skip">
            <a href="homepage/home.php"><i class="fas fa-sign-out-alt"><span>Pular</span></i></a>
        </div>
    </header>
</body>

