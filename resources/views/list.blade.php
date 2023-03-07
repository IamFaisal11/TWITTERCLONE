<!doctype html>
<html lang="en">
  <head>
    <title>List Twiter / Twiter</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css" type="text/css" />
    <link rel="icon" href="images/twitter.ico" type="image/x-icon"/>  
</head>
  <body>
    
  <div class="twitercontainer">
        <section id="left__side" class="fixed__side">
            <div class="left__side--top">
                <div class="menu__icon logo">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
                <div class="menu__icon active">
                    <a href="{{Route('home.page')}}">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </div>
                <div class="menu__icon">
                    <a href="{{Route('explore.page')}}">
                        <i class="fas fa-hashtag"></i>
                        Explore
                    </a>
                </div>
                <div class="menu__icon">
                    <a href="{{Route('notifications.page')}}">
                        <i class="far fa-bell"></i>
                        Notifications
                    </a>
                </div>
                <div class="menu__icon">
                    <a href="{{Route('message.page')}}">
                    <i class="fi fi-sr-envelope"></i>
                        Message
                    </a>
                </div>
                <div class="menu__icon">
                    <a href="{{Route('bookmark.page')}}">
                        <i class="far fa-bookmark"></i>
                        Bookmark
                    </a>
                </div>
                <div class="menu__icon">
                    <a href="{{Route('list.page')}}">
                        <i class="far fa-list-alt"></i>
                        List
                    </a>
                </div>
                <div class="menu__icon">
                    <a href="{{Route('profile.page')}}">
                        <i class="far fa-user"></i>
                        Profile
                    </a>
                </div>
                <div class="menu__icon">
                    <a href="{{Route('more.page')}}">
                        <i class=""></i>
                        More
                      </a>
                </div>
                <button class="btn" id="tweet">Tweet</button>
            </div>

            <div class="menu_icon">
                <div id="user">
                    <img src="images/profile.ico">
                    <div class="user__info">
                        <h4>dar rehan rasool</h4>
                        <small>@sycomusiclover</small>
                    </div>
                    <i class="fas fa-allipsis-h"></i>
                </div>
            </div>
        </section>

        <section id="center__area">
            <div class="status">
                <div class="img"></div>
                <form class="happening">
                    <input type="text" placeholder="What's happening">
                    <button class=" btn tweet__btn">
                        Tweet
                    </button>
                </form>
            </div>
            <div class="header">
                <h1>List !</h1>
            </div>
            <div class="box__img">
                <div class="img"></div>
                <div class="tweet">
                    <div class="user__info--tweet">
                        <h4>dar rehan rasool</h4>
                        <small>@sycomusiclover</small>
                    </div>
                    <p>
                    <b> #list 1</b>
                    </p>
                </div>
            </div>
            <div class="box__img">
                <div class="img"></div>
                <div class="tweet">
                    <div class="user__info--tweet">
                        <h4>faisal rafiq</h4>
                        <small>@sycomusiclover</small>
                    </div>
                    <p>
                    <b> #list 2</b>
                    </p>
                </div>
            </div>
            <div class="box__img">
                <div class="img"></div>
                <div class="tweet">
                    <div class="user__info--tweet">
                        <h4>yasir pachi</h4>
                        <small>@sycomusiclover</small>
                    </div>
                    <p>
                    <b> #list 3</b>
                    </p>
                </div>
            </div>
            <div class="box__img">
                <div class="img"></div>
                <div class="tweet">
                    <div class="user__info--tweet">
                        <h4>huzaif ahmed</h4>
                        <small>@sycomusiclover</small>
                    </div>
                    <p>
                       <b> #list 4</b>
                    </p>
                </div>
            </div>
        </section>

        <section id="right__side" class="fixed__side">
            <form>
                <span class="icon"><i class="fas fa-search"></i></span>
                <input type="text" placeholder="Search Twitter">
            </form>

            <div class="trending">
                <h3>What's happeing</h3>
                <div class="trend">
                    <h5>#AskSRK</h5>
                    <p>15 minutes #AsKSRK just to thank u for the love and to spread some more fun on Saturday….</p>
                </div>
                <div class="trend">
                    <h5>#iPhone 6</h5>
                    <p>Am not sorry but congratulations to the next president of Nigeria 
                       A New nigeria is POssible 
                       #YourViewTVC  wike iphone6 #KadunaWelcomesObiDatti #PeterObiinJos</p>
                </div>
                <div class="trend">
                    <h5>#Salman Khan</h5>
                    <p>Athiya Shetty, KL Rahul to have 'grand, traditional wedding'; Salman Khan, Ajay Devgn invited</p>
                </div>
                <div class="trend">
                    <h5>#BoycottBollywoodForever</h5>
                    <p>Some shameless #Bollywood filmmakers like Anurag Kashyap are foolishly reacting to PM Modi's remarks on #BoycottBollywood
                       Only because to such shameless Filmmakers,people of the Country have decided to #BoycottBollywoodForever & #BoycottBollywoodCompletely</p>
                </div>
                <button class=" btn show__btn">Show More</button>
            </div>
        </section> 
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>