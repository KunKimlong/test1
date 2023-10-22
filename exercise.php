<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 p-5">
                <h1>Student Information</h1>
                <form action="">
                    <label for="">ID:</label>
                    <input type="text" name="id" id="" class="form-control my-2">
                    <label for="">Name:</label>
                    <input type="text" name="name" id="" class="form-control my-2">
                    <label for="">Gender:</label>
                    <select name="gender" id="" class="form-select my-2">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <label for="">Score:</label>
                    <input type="text" name="score" id="" class="form-control my-2">
                    <button class="btn btn-success" name="btn-submit">Submit</button>
                </form>
                <table class="mt-3 table table-hover table-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Score</th>
                    </tr>
                </table>
            </div>
            <div class="col-4 p-5">
                <h1>Employee Information</h1>
                <form action="">
                    <label for="">ID:</label>
                    <input type="text" name="id" id="" class="form-control my-2">
                    <label for="">Name:</label>
                    <input type="text" name="name" id="" class="form-control my-2">
                    <label for="">Gender:</label>
                    <select name="gender" id="" class="form-select my-2">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <label for="">Position:</label>
                    <input type="text" name="position" id="" class="form-control my-2">
                    <label for="">Salary:</label>
                    <input type="text" name="salary" id="" class="form-control my-2">
                    <button class="btn btn-success" name="btn-submit">Submit</button>
                </form>
                <table class="mt-3 table table-hover table-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Position</th>
                        <th>Salary</th>
                    </tr>
                </table>
            </div>
            <div class="col-4 p-5">
                <h1>Patient Information</h1>
                <form action="">
                    <label for="">ID:</label>
                    <input type="text" name="id" id="" class="form-control my-2">
                    <label for="">Name:</label>
                    <input type="text" name="name" id="" class="form-control my-2">
                    <label for="">Gender:</label>
                    <select name="gender" id="" class="form-select my-2">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <label for="">Type of disease:</label>
                    <input type="text" name="tod" id="" class="form-control my-2">
                    <button class="btn btn-success" name="btn-submit">Submit</button>
                </form>
                <table class="mt-3 table table-hover table-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Type of disease</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>