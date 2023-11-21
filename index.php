<style>
    .form {
        display: flex;
        justify-content: center;
        margin-top: 100px;
    }

    .form-container {
        width: 650px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #f8f9fa;
    }

    .row {
        margin-bottom: 10px;
    }
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<div class="form">
    <form action="result.php" method="post" class="form-container">
        <div class="row">
            <label for="name" class="col-4">Name</label>
            <input type="text" name="name" class="col-8">
        </div>

        <div class="row">
            <label for="club" class="col-4">Club you want to apply</label>
            <select name="club" id="club" class="col-8">
                <option value="Robotic club">Robotic Club</option>
                <option value="Guitar club">Piano Club</option>
            </select>
        </div>
        <div class="row">
            <label for="time" class="col-4">Best time for you</label>
            <div class="col-8">
                <input type="radio" id="s-m" name="time" value="Saturday mornings">
                <label for="s-m">Saturday mornings</label>
                <br>
                <input type="radio" id="sa-a" name="time" value="Saturday afternoons">
                <label for="sa-a">Saturday afternoons</label>
                <br>
                <input type="radio" id="s-a" name="time" value="Sunday afternoons">
                <label for="s-a">Sunday afternoons</label>
            </div>
        </div>

        <div class="row">
            <label for="skills" class="col-4">Your skills</label>
            <div class="col-8">
                <input type="checkbox" id="coder" name="coder" value="the best coder">
                <label for="coder">The best coder</label>
                <br>
                <input type="checkbox" id="arts" name="arts" value="good in arts">
                <label for="arts">Good in arts</label>
                <br>
                <input type="checkbox" id="star" name="star" value="a super star">
                <label for="star">A super star</label>
                <br>
                <input type="checkbox" id="dancer" name="dancer" value="a crazy dancer">
                <label for="dancer">A crazy dancer</label>
                <br>
                <input type="checkbox" id="singer" name="singer" value="singer">
                <label for="singer">Singer</label>
                <br>
                <input type="checkbox" id="design" name="design" value="good in design">
                <label for="design">Good in design</label>
                <br>
                <input type="checkbox" id="eater" name="eater" value="the best eater">
                <label for="eater">The best eater</label>
                <br>
                <input type="checkbox" id="speeches" name="speeches" value="good in speeches">
                <label for="speeches">Good in speeches</label>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-danger">Submit!</button>
            </div>
        </div>
    </form>
</div>