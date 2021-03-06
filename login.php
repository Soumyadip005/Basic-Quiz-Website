<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <selection class="main">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#F9C226" fill-opacity="1" d="M0,288L13.3,266.7C26.7,245,53,203,80,202.7C106.7,203,133,245,160,229.3C186.7,213,213,139,240,90.7C266.7,43,293,21,320,37.3C346.7,53,373,107,400,117.3C426.7,128,453,96,480,112C506.7,128,533,192,560,202.7C586.7,213,613,171,640,154.7C666.7,139,693,149,720,170.7C746.7,192,773,224,800,208C826.7,192,853,128,880,122.7C906.7,117,933,171,960,208C986.7,245,1013,267,1040,266.7C1066.7,267,1093,245,1120,250.7C1146.7,256,1173,288,1200,261.3C1226.7,235,1253,149,1280,117.3C1306.7,85,1333,107,1360,149.3C1386.7,192,1413,256,1427,288L1440,320L1440,0L1426.7,0C1413.3,0,1387,0,1360,0C1333.3,0,1307,0,1280,0C1253.3,0,1227,0,1200,0C1173.3,0,1147,0,1120,0C1093.3,0,1067,0,1040,0C1013.3,0,987,0,960,0C933.3,0,907,0,880,0C853.3,0,827,0,800,0C773.3,0,747,0,720,0C693.3,0,667,0,640,0C613.3,0,587,0,560,0C533.3,0,507,0,480,0C453.3,0,427,0,400,0C373.3,0,347,0,320,0C293.3,0,267,0,240,0C213.3,0,187,0,160,0C133.3,0,107,0,80,0C53.3,0,27,0,13,0L0,0Z"></path></svg>
        
        <div class="navigation">
            <div class="brand">
                <h1>Quiz Master</h1>
            </div>
            <div class="toggle">
               <i class="fas fa-bars"></i> 
            </div>
            <div class="nav-menu">
                <div class="close">
                    <i class="fas fa-window-close"></i>
                </div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Take Quiz</a></li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="photo">
                <img src="img/social-girl.svg">
            </div>

            <div class="form-cont">
                <div class="inner-form">
                    <img src="img/female-avatar.svg" alt="avatar" srcset="">

                    <div class="social-login">
                        <span>Social Login</span>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </a></li>
                        </ul>
                    </div>

                    <div class="input-area">
                        <form action="registration.php" method="POST">
                            <div>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <input type="email" placeholder="Email" name = "user" class="form-control">
                            </div>
                            <div>
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Password" name = "password" class="form-control">
                            </div>
                            <button type = "submit" class="btn">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </selection>

    <script>
        let toggler = document.querySelector('.toggle');
        let menu = document.querySelector('.nav-menu');
        let close = document.querySelector('.close');
        
        toggler.addEventListener('click', ()=> {
            menu.style.display = 'block';
            console.log('clicked')
        });

        close.addEventListener('click', () => {
            menu.style.display = '';
            cons
        });
    </script>
</body>
</html>