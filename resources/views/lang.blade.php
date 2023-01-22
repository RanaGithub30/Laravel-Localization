<!DOCTYPE html>
<html>
<head>
    <title>How to Create Multi Language Website in Laravel - ItSolutionStuff.com</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
  
        <div class="row" style="margin: 25px;">
            <div class="col-md-2 col-md-offset-6 text-right">
                <strong>Select Language: </strong>
            </div>
            <div class="col-md-4">
                <select class="form-control changeLang">
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>France</option>
                    <option value="sp" {{ session()->get('locale') == 'sp' ? 'selected' : '' }}>Spanish</option>
                    <option value="bn" {{ session()->get('locale') == 'bn' ? 'selected' : '' }}>Bengali</option>
                </select>
            </div>
        </div>
    
        <center><u><h1>{{ __('messages.country') }}</h1></u></center>
        
        <div>
           <center><img 
           src="data:image/jpeg;base64,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" style="margin: 5px;" alt="">
           </center>
        </div>

        <div style="margin-top: 35px;">
              <b><p>{{ __('messages.body') }}</p></b>
        </div>
        <div>
              <b><p>President: {{ __('messages.president') }}</p></b>
        </div>
        <div>
              <b><p>Capital: {{ __('messages.capital') }}</p></b>
        </div>
     
    </div>
</body>
  
<script type="text/javascript">
  
    var url = "{{ route('changeLang') }}";
  
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
  
</script>
</html>