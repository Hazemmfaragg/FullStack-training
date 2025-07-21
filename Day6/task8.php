<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="p-3 bg-dark">
    <form>
        <div class="input-group">
            <input type="text"
                class="form-control is-valid"
                placeholder="Student Name"
                pattern="[A-Za-z]{8,10}"
                title="Name length must be 8-10 alphabetic characters"
                required>

            <input type="number"
                class="form-control is-valid"
                placeholder="Grade"
                min="10"
                max="100"
                title="Grade must be between 10 and 100"
                required>


            <button class="btn btn-outline-danger" type="submit">Send</button>
        </div>
    </form>

    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>
