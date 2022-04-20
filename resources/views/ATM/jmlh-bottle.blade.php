<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM-Menu</title>

    <link href="image/icon.png" rel="shortcut icon"> <!-- icon tab browser -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/atm-menu.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
</head>
<body>
    <div class="container">
        <!-- NAV -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img class="logo mt-4" src="/image/logoBesar.png" alt="" width="300">
                </a>        
            </div>
        </nav>
        <!-- END NAV -->        
        <div class="d-flex justify-content-end">
            <img class="kotak-bulet" src="/image/kotak-bulet.png" alt="">
        </div>
        <!-- <p style="margin-top:1rem; margin-bottom: 5rem; font-size:3vw; font-weight:bold; color:#343A40;">Menu</p>             -->
        <div class="container">
            <div class="row j-botol">
                <h1 class="text-center">Bottle</h1>            
            </div>
            <div class="d-flex bla-bla justify-content-start">
                <img class="kotak-jmlh" src="/image/kotak.png" alt="">
            </div>
            <div class="row pt-4 justify-content-center" id="increment-count">
                <!-- <img class="botol"   alt=""> -->
                <input type="image" id="botol" class="botol" src="/image/botol.png">
            </div>
            <form>
                @csrf
                <input type="hidden" id="user_id" class="form-control-plaintext" readonly name="user_id" value="{{ auth()->user()->id }}"/>                
                <div class="form-group">
                    <label for="botol_id">Kategori Produk</label>
                    <select name="botol_id" id="botol_id" class="form-control">
                        <option value="">Pilih Ukuran Botol</option>
                        @foreach($itemBotol as $botol)
                            <option id="botol_id" value="{{ $botol->id }}">{{ $botol->ukuran }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row pt-2 text-center">
                     <!-- <h2 class="text-center" id="total-count"></h2> -->
                     <input type="number" id="total-count" name="jmlhBotol" value="1">
                </div>
            </form>
            
            <div class="row">
                <h6 class="text-center" style="color: #28DF99">botol telah ditambahkan</h6>            
            </div>
            <div class="row py-4">
                <h3 class="text-center">Masukkan botol ke dalam lubang di bawah!</h3>            
            </div>
            <div class="row">
                <h6 class="text-center">Masukkan botol perlahan👌</h6>            
            </div>
            
        </div>
        <div class="row r-act-btn d-flex justify-content-between">
            <div class="col-6 act-btn kembali">
                <div class="card">
                    <a href="{{ url('/atm-inputBotol') }}" class="btn btn-lg p-3" style="color:white; background-color: #F52F53">Kembali</a>                        
                </div>
            </div>
            <div class="col-6 act-btn selanjutnya">
                <div class="card">
                    <a href="{{ url('/atm-succes') }}" id="saveJumlah" class="btn btn-lg p-3" style="color:white; background-color: #28DF99">Selanjutnya</a>
                </div>
            </div>
        </div>

    </div>
    <div id="result"></div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script>
        // Select increment and decrement buttons
        const incrementCount = document.getElementById("increment-count");

        // Select total count
        const totalCount = document.getElementById("total-count");

        // Variable to track count
        var count = 1;

        // Display initial count value
        totalCount.innerHTML = count;

        // Function to increment count
        const handleIncrement = () => {
            var value = parseInt(document.getElementById('total-count').value, 10);
            value = isNaN(value) ? 1 : value;
            value++;
            document.getElementById('total-count').value = value;
        };

        // Add click event to buttons
        incrementCount.addEventListener("click", handleIncrement);

        $.ajaxSetup({
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
   

        $('#saveJumlah').click(function(e) {
            e.preventDefault();

            var user_id = $("#user_id").val();        
            var botol_id = $("#botol_id").val();        
            var jmlh_Botol = $("#total-count").val();
            
            $.get('http://127.0.0.1:8000/atm-succes', //Required URL of the page on server
            { // Data Sending With Request To Server
                jmlhBotol:jmlh_Botol,            
            },
            function(data){
                // Display the returned data in browser
                $(".container").hide();
                $("#result").html(data);
            }
            ),

            $.ajax({
                type: 'post',
                url: "{{ route('getData') }}",
                data: {user_id:user_id, jmlhBotol:jmlh_Botol, id_botol:botol_id },
                dataType: 'json',                
                success: function(response){
                    console.log(response)
                    // window.location = "http://127.0.0.1:8000/atm-succes";
                },
                    
            });
        });
        document.addEventListener("keydown", w => {
            console.log(w)
        });
    </script>
</body>
</html>