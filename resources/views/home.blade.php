<!doctype html>
<html lang="en">
  <head>
    <title>Home / Twiter</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css" type="text/css" />
    <link rel="icon" href="images/twitter.ico" type="image/x-icon"/>
    <!-- flaticons -->
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="twitercontainer">
       <section id="left__side" class="fixed__side">
            <div class="left__side--top">
                <div class="menu__icon logo">
                    <a href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
                <div class="menu__icon active">
                    <a href="{{url('/home')}}">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </div>
                <div class="menu__icon">
                    <a href="">
                        <i class="fas fa-hashtag"></i>
                        Explore
                    </a>
                </div>
                <div class="menu__icon">
                    <a href="">
                        <i class="far fa-bell"></i>
                        Notifications
                    </a>
                </div>
                <div class="menu__icon">
                    <a href="">
                    <i class="fi fi-sr-envelope"></i>
                        Message
                    </a>
                </div>
                <div class="menu__icon">
                    <a href="">
                        <i class="far fa-bookmark"></i>
                        Bookmark
                    </a>
                </div>
                <div class="menu__icon">
                    <a href="">
                        <i class="far fa-list-alt"></i>
                        List
                    </a>
                </div>
                <div class="menu__icon">
                    <a href="{{url('/profile/'.$user->id)}}">
                        <i class="far fa-user"></i>
                        Profile
                    </a>
                </div>
                <div class="menu__icon">
                    <a href="">
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
            <div class="header">
                <h1>Home</h1>
            </div>
            <div class="status">
                <div class="img"></div>
        <form action="{{url('/')}}/tweet" method="post">
            @csrf        
                    <input type="text" name="tweet" placeholder="What's happening">
                    <button class=" btn tweet__btn">
                        Tweet
                    </button>
                </form>
            </div>
            <div class="box__img">
                <div class="img"></div>
                <div class="tweet">
                    <div class="user__info--tweet">
                        <h4>dar rehan rasool</h4>
                        <small>@sycomusiclover</small>
                    </div>
                    <p>The guitar is a fretted musical instrument that typically has six strings.
                       It is usually held flat against the player's body and played by strumming or plucking the strings with the dominant hand,
                       while simultaneously pressing selected strings against frets with the fingers of the opposite hand.
                       A plectrum or individual finger picks may also be used to strike the strings. The sound of the guitar is projected either acoustically,
                       by means of a resonant chamber on the instrument, or amplified by an electronic pickup and an amplifier.</p>
                    <img src="images/rehan.ico" class="tweet__img">
                </div>
            </div>
            <div class="box__img">
                <div class="img"></div>
                <div class="tweet">
                    <div class="user__info--tweet">
                        <h4>faisal rafiq</h4>
                        <small>@sycomusiclover</small>
                    </div>
                    <p>Food is any substance consumed by an organism for nutritional support.
                       Food is usually of plant, animal, or fungal origin, and contains essential nutrients, such as carbohydrates,
                       fats, proteins, vitamins, or minerals. The substance is ingested by an organism and assimilated by the organism's cells to provide energy,
                       maintain life, or stimulate growth. Different species of animals have different feeding behaviours that satisfy the needs of their unique metabolisms,
                       often evolved to fill a specific ecological niche within specific geographical contexts.</p>
                    <img src="images/food.ico" class="tweet__img">
                </div>
            </div>
            <div class="box__img">
                <div class="img"></div>
                <div class="tweet">
                    <div class="user__info--tweet">
                        <h4>yasir pachi</h4>
                        <small>@sycomusiclover</small>
                    </div>
                    <p>Wings of Fire (1999), is the autobiography of the Missile Man of India and President of India, Dr. A. P. J. Abdul Kalam. It was written by him and Arun Tiwari.[1]
                       In the autobiography, Kalam examines his early life, effort, hardship, fortitude, luck and chance that eventually led him to lead Indian space research, nuclear and missile programs.
                       Kalam started his career, after graduating from Aerospace engineering at Madras Institute of Technology, at Hindustan Aeronautics Limited and was assigned to build a hovercraft prototype.
                       Later he moved to ISRO and helped establish the Vikram Sarabhai Space Centre and pioneered the first space launch-vehicle program. During the 1990s and early 2000,
                       Kalam moved to the DRDO to lead the Indian nuclear weapons program,
                       with particular successes in thermonuclear weapons development culminating in the operation Smiling Buddha and an ICBM Agni.</p>
                    <img src="images/wings.ico" class="tweet__img">
                </div>
            </div>
            <div class="box__img">
                <div class="img"></div>
                <div class="tweet">
                    <div class="user__info--tweet">
                        <h4>huzaif ahmed</h4>
                        <small>@sycomusiclover</small>
                    </div>
                    <p>Radio is the technology of signaling and communicating using radio waves.
                       [1][2][3] Radio waves are electromagnetic waves of frequency between 30 hertz (Hz) and 300 gigahertz (GHz).
                       They are generated by an electronic device called a transmitter connected to an antenna which radiates the waves,
                       and received by another antenna connected to a radio receiver. Radio is widely used in modern technology, in radio communication,
                       radar, radio navigation, remote control, remote sensing, and other applications.</p>
                    <img src="images/radio.ico" class="tweet__img">
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