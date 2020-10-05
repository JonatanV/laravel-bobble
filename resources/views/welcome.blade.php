<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cuprum&family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Twomad Bobblehead</title>
</head>

<body class="bg-primary">
    <nav class="navbar navbar-dark mb-5">
        <a class="navbar-brand" href="#"><img src="img/twomad_falllin.png" class="logo" alt="logotyp"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01"
            aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#sida1">BILDER PÅ PRODUKTEN<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sida2">INTRESSEANMÄLAN</a>
                </li>
            </ul>

        </div>
    </nav>

    <section class="sida1 bg-primary pb-5 mb-5" id="sida1">
        <h3 class="text-header text-center pt-5 pb-5 mb-5">SE VÅRA PRODUKTER GENOM ATT KLICKA PÅ PILARNA</h3>
        <div id="carouselExampleIndicators" class="carousel slide pb-5 mb-5 mt-5" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/igm1.jpg" class="img-fluid rounded mx-auto d-block products mb-5" alt="">
                </div>
                <div class="carousel-item">
                    <img src="img/img2.jpg" class="img-fluid rounded mx-auto d-block products mb-5" alt="">
                </div>
                <div class="carousel-item">
                    <img src="img/img3.jpg" class="img-fluid rounded mx-auto d-block products mb-5" alt="">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="sida2 pt-5 mt-5" id="sida2">
        <h2 class="text-header text-center mt-5">INTRESSEANMÄLAN</h2>
        <div class="row">
            <div class="col">
                <div class="bobble3dview d-flex justify-content-center">
                    <img src="img/3dview.png" class="img-fluid mt-5 mb-5" alt="Responsive image">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="container text-center">
                <p>
                    OBS: Informationen som ni lämnar ut kommer att användas för att kunna uppdatera er när bobbleheads
                    kommer ut
                    samt att ge information om när de skickas.
                </p>
                <p>
                    Efter att ni fått eran bobblehead så raderar vi eran
                    information och ni kommer inte längre finnas kvar i vårat system.
                </p>
            </div>
            <form method="POST" action="/">
                @csrf
                <div class="container d-flex align-items-center justify-content-center">
                    <div class="field">
                        <label for="email">Email:</label>
                        <div class="control">
                            <input
                                type="text"
                                class="input @error('email') is-danger @enderror"
                                id="email"
                                name="email"
                                placeholder="E-mail" 
                                value="{{ old('email')}}">
                                @error('email')
                                    <p class="text-danger">{{ $errors->first('email') }}</p>                                
                                @enderror
                            </div>
                        </div>
                    <div class="form-group">
                        <div class="field">
                            <label for="label">För- och efternamn</label>
                            <div class="control">
                                <input 
                                    type="text"
                                    id="name"
                                    name="name"
                                    class="input @error('name') is-danger @enderror"
                                    placeholder="Ditt namn"
                                    value="{{ old('name') }}">
                                    @error('name')

                            <p class="help is-danger">{{ $errors->first('name') }}</p>
                                        
                                    @enderror
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="container">
            <div class="form-group text-center">
                <label for="formControlRange">Hur mycket är du villig att betala?</label>
                <div class="slidecontainer">
                    <input type="range" min="100" max="300" value="100" class="slider" name="demo" id="demo">
                    <p> <span id="price"> </span>kr</p>
                </div>
                <div class="centeredButton d-flex align-items-right justify-content-center">
                    <input class="text-header btn2 mb-5" type="submit" value="Skicka">
                </div>
            </div>
        </div>
        </form>
        </div>
    </section>
    <script>
        var slider = document.getElementById("demo");
        var output = document.getElementById("price");
        output.textContent = slider.value;
        slider.oninput = function() {
            output.textContent = this.value;
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>