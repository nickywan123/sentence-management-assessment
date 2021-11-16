<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- CSRF Token -->
       <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

         <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-touch-icon.png')}}">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;

            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <form action="{{route('sentences.update',$sentence->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                  <label for="sentence" class="form-label">Sentence</label>
                  <input type="text" class="form-control" id="sentence" name="sentence" aria-describedby="sentence" value="{{$sentence->sentence}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="matrix" class="form-label">Matrix Position</label>
                    <select name="matrix" class="form-select @error('matrix') is-invalid @enderror" aria-label="default">
                        <option selected disabled>Open this select menu</option>
                            @foreach($matrices as $matrix)
                             <option  value="{{$matrix->position}}" {{ $sentence->matrix == $matrix->position ? 'selected' : '' }}>{{$matrix->position}}</option>
                            @endforeach
                      </select>
                      @error('matrix')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">Color Selection</label>
                    <input type="color" name="color" value="{{$sentence->color}}" class="form-control" id="color" aria-describedby="color" >
                </div>
               
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/" class="btn btn-danger">Return Home</a>
            </form>
        </div>
    </body>
</html>
