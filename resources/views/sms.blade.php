<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMS TEST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Send Message</h1>

        <form action="{{ route('send_sms') }}" class="row g-3" method="post">
            @csrf
            @method('post')
            <div class="col-md-6">
                <label for="staticEmail2">Message</label>
                <input type="text" class="form-control" id="staticEmail2" name="mssg"
                    placeholder="Enter message here">
            </div>
            <div class="col-md-6">
                <label for="inputPassword2">Phone</label>
                <input type="number" class="form-control" id="inputPassword2" name="phone" placeholder="Enter phone">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Send Message</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
