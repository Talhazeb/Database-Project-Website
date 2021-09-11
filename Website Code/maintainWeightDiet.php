<!DOCTYPE html>
<html>

<head>
    <title>Weight Loss Diet</title>
    <link href="img/logo.png" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light content-center fixed-top" style="height : 70px">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="img/logo.png" style="width: 8%"></a>
            <ul class="navbar-nav" style="font-size: 20px">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" style="padding-right: 35px">Home</a>
                </li>
                <?php if (isset($_SESSION["NAME"])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="">Membership</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h2 class="mt-4">Day 1</h2>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 1</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1/2 cup oatmeal (dry amount) made with water</p>
                <p>1/2 cup strawberries</p>
                <p>6 egg whites cooked with 1 yolk</p>
                

                <strong>A.M. Snack</strong>
                <p>1 cup green vegetables</p>

                <strong>Lunch</strong>
                <p>Tuna sandwich made with 6-oz. can tuna (in spring water), 2 slices whole-wheat bread, 1 Tbsp. fat-free mayo, 2 leaves romaine lettuce</p>

                <strong>P.M. Snack</strong>
                <p>Protein shake made w/ 40 g whey protein</p>

                <strong>Dinner</strong>
                <p>Chicken salad made with 8 oz. chicken breast, 2 Tbsp. Italian dressing, 1/2 medium tomato, 2 leaves romaine lettuce, 1/2 cup broccoli</p>
                <strong>Benefits</strong>
                <p>1,817 calories, 255 g protein, 98 g carbohydrate, 37 g fat, 20 g fiber</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
                <h2 class="mt-4">Day 2</h2>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 2</h3>
                <strong>Breakfast</strong>
                    <br>
                    <p>1 medium bagel with 2 tbsp. reduced-fat peanut butter</p>
                    <p>6 egg whites cooked with 1 yolk</p>

                    <strong>A.M. Snack</strong>
                    <p>1 cup brown long-grain rice (cooked amount)</p>

                    <strong>Lunch</strong>
                    <p>6 oz. lean steak </p>

                    <strong>P.M. Snack</strong>
                    <p>Protein shake made w/ 30-40 g whey protein</p>

                    <strong>Dinner</strong>
                    <p>8 oz. red snapper or halibut</p>
                    <strong>Benefits</strong>
                    <p>1,959 calories, 254 g protein, 132 g carbohydrate, 39 g fat, 17 g fiber</p>
                    <br>
            </div>
            </div>

            <div class="col-sm-4">
                <h2 class="mt-4">Day 3</h2>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 3</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1/2 cup oatmeal made with water</p>

                <strong>A.M. Snack</strong>
                <p>8 oz. chicken breast</p>

                <strong>Lunch</strong>
                <p>Large baked potato with skin (3-4″ in diameter) </p>

                <strong>P.M. Snack</strong>
                <p>Low-carb, low-sugar protein bar</p>

                <strong>Dinner</strong>
                <p>Omelet made with 8 egg whites and 1 yolk, cooked with 1/2 cup broccoli, 2 mushrooms, fresh salsa</p>
                <strong>Benefits</strong>
                <p>1,862 calories, 226 g protein, 149 g carbohydrate, 35 g fat, 23 g fiber</p>
                <br>
            </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <hr>

        <div class="row">
            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 4</h3>
            <strong>Breakfast</strong>
                <br>
                <p>1 cup whole-grain cereal</p>
                <p>1 cup 1% milk</p>

                <strong>A.M. Snack</strong>
                <p>1 cup green veggies</p>

                <strong>Lunch</strong>
                <p>6 oz. lean steak</p>

                <strong>P.M. Snack</strong>
                <p>Protein shake made w/ 30-40 g whey protein</p>

                <strong>Dinner</strong>
                <p>16-oz. can tuna (in spring water) made with 1 Tbsp. fat-free mayo</p>
                <strong>Benefits</strong>
                <p>1,984 calories, 226 g protein, 200 g carbohydrate, 29 g fat, 28 g fiber</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 5</h3>
            <strong>Breakfast</strong>
                <br>
                <p>1/2 cup oatmeal made with water</p>

                <strong>A.M. Snack</strong>
                <p>8 oz. chicken breast</p>

                <strong>Lunch</strong>
                <p>Large baked potato with skin (3-4″ in diameter) </p>
                <p>8 oz. sliced turkey </p>

                <strong>P.M. Snack</strong>
                <p>Protein shake made w/ 30-40 g whey protein and 1 cup berries</p>

                <strong>Dinner</strong>
                <p>7 oz. lean steak</p>                
                <p>6-8 stalks asparagus</p>                
                <strong>Benefits</strong>
                <p>1,846 calories, 258 g protein, 122 g carbohydrate, 32 g fat, 23 g fiber</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 6</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1 cup whole-grain cereal</p>
                <p>1 cup 1% milk</p>

                <strong>A.M. Snack</strong>
                <p>1 cup green veggies</p>

                <strong>Lunch</strong>
                <p>6 oz. lean steak</p>

                <strong>P.M. Snack</strong>
                <p>Protein shake made w/ 40 g whey protein</p>

                <strong>Dinner</strong>
                <p>Chicken salad made with 8 oz. chicken breast, 2 Tbsp. Italian dressing, 1/2 medium tomato, 2 leaves romaine lettuce, 1/2 cup broccoli</p>
                <strong>Benefits</strong>
                <p>1,817 calories, 255 g protein, 98 g carbohydrate, 37 g fat, 20 g fiber</p>
                <br>
            </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <hr>

        <div class="row">
            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 7</h3>
            <strong>Breakfast</strong>
                <br>
                <p>1/2 cup oatmeal (dry amount) made with water</p>
                <p>1/2 cup strawberries</p>
                <p>6 egg whites cooked with 1 yolk</p>
                

                <strong>A.M. Snack</strong>
                <p>1 cup green vegetables</p>

                <strong>Lunch</strong>
                <p>Tuna sandwich made with 6-oz. can tuna (in spring water), 2 slices whole-wheat bread, 1 Tbsp. fat-free mayo, 2 leaves romaine lettuce</p>

                <strong>P.M. Snack</strong>
                <p>Protein shake made w/ 40 g whey protein</p>

                <strong>Dinner</strong>
                <p>Chicken salad made with 8 oz. chicken breast, 2 Tbsp. Italian dressing, 1/2 medium tomato, 2 leaves romaine lettuce, 1/2 cup broccoli</p>
                <strong>Benefits</strong>
                <p>1,817 calories, 255 g protein, 98 g carbohydrate, 37 g fat, 20 g fiber</p>
                <br>
            </div>
            </div>

        <div class="col-sm-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 8</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1/2 cup oatmeal made with water</p>

                <strong>A.M. Snack</strong>
                <p>8 oz. chicken breast</p>

                <strong>Lunch</strong>
                <p>Large baked potato with skin (3-4″ in diameter) </p>

                <strong>P.M. Snack</strong>
                <p>Low-carb, low-sugar protein bar</p>

                <strong>Dinner</strong>
                <p>Omelet made with 8 egg whites and 1 yolk, cooked with 1/2 cup broccoli, 2 mushrooms, fresh salsa</p>
                <strong>Benefits</strong>
                <p>1,862 calories, 226 g protein, 149 g carbohydrate, 35 g fat, 23 g fiber</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 9</h3>
            <strong>Breakfast</strong>
                <br>
                <p>1 cup whole-grain cereal</p>
                <p>1 cup 1% milk</p>

                <strong>A.M. Snack</strong>
                <p>1 cup green veggies</p>

                <strong>Lunch</strong>
                <p>6 oz. lean steak</p>

                <strong>P.M. Snack</strong>
                <p>Protein shake made w/ 30-40 g whey protein</p>

                <strong>Dinner</strong>
                <p>16-oz. can tuna (in spring water) made with 1 Tbsp. fat-free mayo</p>
                <strong>Benefits</strong>
                <p>1,984 calories, 226 g protein, 200 g carbohydrate, 29 g fat, 28 g fiber</p>
                <br>
            </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <hr>

        <div class="row">
            <div class="col-sm-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 10</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1/2 cup oatmeal (dry amount) made with water</p>
                <p>1/2 cup strawberries</p>
                <p>6 egg whites cooked with 1 yolk</p>
                

                <strong>A.M. Snack</strong>
                <p>1 cup green vegetables</p>

                <strong>Lunch</strong>
                <p>Tuna sandwich made with 6-oz. can tuna (in spring water), 2 slices whole-wheat bread, 1 Tbsp. fat-free mayo, 2 leaves romaine lettuce</p>

                <strong>P.M. Snack</strong>
                <p>Protein shake made w/ 40 g whey protein</p>

                <strong>Dinner</strong>
                <p>Chicken salad made with 8 oz. chicken breast, 2 Tbsp. Italian dressing, 1/2 medium tomato, 2 leaves romaine lettuce, 1/2 cup broccoli</p>
                <strong>Benefits</strong>
                <p>1,817 calories, 255 g protein, 98 g carbohydrate, 37 g fat, 20 g fiber</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 11</h3>
                <strong>Breakfast</strong>
                    <br>
                    <p>1 medium bagel with 2 tbsp. reduced-fat peanut butter</p>
                    <p>6 egg whites cooked with 1 yolk</p>

                    <strong>A.M. Snack</strong>
                    <p>1 cup brown long-grain rice (cooked amount)</p>

                    <strong>Lunch</strong>
                    <p>6 oz. lean steak </p>

                    <strong>P.M. Snack</strong>
                    <p>Protein shake made w/ 30-40 g whey protein</p>

                    <strong>Dinner</strong>
                    <p>8 oz. red snapper or halibut</p>
                    <strong>Benefits</strong>
                    <p>1,959 calories, 254 g protein, 132 g carbohydrate, 39 g fat, 17 g fiber</p>
                    <br>
            </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 12</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1/2 cup oatmeal made with water</p>

                <strong>A.M. Snack</strong>
                <p>8 oz. chicken breast</p>

                <strong>Lunch</strong>
                <p>Large baked potato with skin (3-4″ in diameter) </p>

                <strong>P.M. Snack</strong>
                <p>Low-carb, low-sugar protein bar</p>

                <strong>Dinner</strong>
                <p>Omelet made with 8 egg whites and 1 yolk, cooked with 1/2 cup broccoli, 2 mushrooms, fresh salsa</p>
                <strong>Benefits</strong>
                <p>1,862 calories, 226 g protein, 149 g carbohydrate, 35 g fat, 23 g fiber</p>
                <br>
            </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <hr>

        <div class="row">
            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 13</h3>
            <strong>Breakfast</strong>
                <br>
                <p>1 cup whole-grain cereal</p>
                <p>1 cup 1% milk</p>

                <strong>A.M. Snack</strong>
                <p>1 cup green veggies</p>

                <strong>Lunch</strong>
                <p>6 oz. lean steak</p>

                <strong>P.M. Snack</strong>
                <p>Protein shake made w/ 30-40 g whey protein</p>

                <strong>Dinner</strong>
                <p>16-oz. can tuna (in spring water) made with 1 Tbsp. fat-free mayo</p>
                <strong>Benefits</strong>
                <p>1,984 calories, 226 g protein, 200 g carbohydrate, 29 g fat, 28 g fiber</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 14</h3>
            <strong>Breakfast</strong>
                <br>
                <p>1/2 cup oatmeal made with water</p>

                <strong>A.M. Snack</strong>
                <p>8 oz. chicken breast</p>

                <strong>Lunch</strong>
                <p>Large baked potato with skin (3-4″ in diameter) </p>
                <p>8 oz. sliced turkey </p>

                <strong>P.M. Snack</strong>
                <p>Protein shake made w/ 30-40 g whey protein and 1 cup berries</p>

                <strong>Dinner</strong>
                <p>7 oz. lean steak</p>                
                <p>6-8 stalks asparagus</p>                
                <strong>Benefits</strong>
                <p>1,846 calories, 258 g protein, 122 g carbohydrate, 32 g fat, 23 g fiber</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 15</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1 cup whole-grain cereal</p>
                <p>1 cup 1% milk</p>

                <strong>A.M. Snack</strong>
                <p>1 cup green veggies</p>

                <strong>Lunch</strong>
                <p>6 oz. lean steak</p>

                <strong>P.M. Snack</strong>
                <p>Protein shake made w/ 40 g whey protein</p>

                <strong>Dinner</strong>
                <p>Chicken salad made with 8 oz. chicken breast, 2 Tbsp. Italian dressing, 1/2 medium tomato, 2 leaves romaine lettuce, 1/2 cup broccoli</p>
                <strong>Benefits</strong>
                <p>1,817 calories, 255 g protein, 98 g carbohydrate, 37 g fat, 20 g fiber</p>
                <br>
            </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <hr>

        <div class="row">
            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 16</h3>
            <strong>Breakfast</strong>
                <br>
                <p>1/2 cup oatmeal (dry amount) made with water</p>
                <p>1/2 cup strawberries</p>
                <p>6 egg whites cooked with 1 yolk</p>
                

                <strong>A.M. Snack</strong>
                <p>1 cup green vegetables</p>

                <strong>Lunch</strong>
                <p>Tuna sandwich made with 6-oz. can tuna (in spring water), 2 slices whole-wheat bread, 1 Tbsp. fat-free mayo, 2 leaves romaine lettuce</p>

                <strong>P.M. Snack</strong>
                <p>Protein shake made w/ 40 g whey protein</p>

                <strong>Dinner</strong>
                <p>Chicken salad made with 8 oz. chicken breast, 2 Tbsp. Italian dressing, 1/2 medium tomato, 2 leaves romaine lettuce, 1/2 cup broccoli</p>
                <strong>Benefits</strong>
                <p>1,817 calories, 255 g protein, 98 g carbohydrate, 37 g fat, 20 g fiber</p>
                <br>
            </div>
            </div>

        <div class="col-sm-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 17</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1/2 cup oatmeal made with water</p>

                <strong>A.M. Snack</strong>
                <p>8 oz. chicken breast</p>

                <strong>Lunch</strong>
                <p>Large baked potato with skin (3-4″ in diameter) </p>

                <strong>P.M. Snack</strong>
                <p>Low-carb, low-sugar protein bar</p>

                <strong>Dinner</strong>
                <p>Omelet made with 8 egg whites and 1 yolk, cooked with 1/2 cup broccoli, 2 mushrooms, fresh salsa</p>
                <strong>Benefits</strong>
                <p>1,862 calories, 226 g protein, 149 g carbohydrate, 35 g fat, 23 g fiber</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 18</h3>
            <strong>Breakfast</strong>
                <br>
                <p>1 cup whole-grain cereal</p>
                <p>1 cup 1% milk</p>

                <strong>A.M. Snack</strong>
                <p>1 cup green veggies</p>

                <strong>Lunch</strong>
                <p>6 oz. lean steak</p>

                <strong>P.M. Snack</strong>
                <p>Protein shake made w/ 30-40 g whey protein</p>

                <strong>Dinner</strong>
                <p>16-oz. can tuna (in spring water) made with 1 Tbsp. fat-free mayo</p>
                <strong>Benefits</strong>
                <p>1,984 calories, 226 g protein, 200 g carbohydrate, 29 g fat, 28 g fiber</p>
                <br>
            </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <hr>

        <div class="row">
            <div class="col-sm-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 19</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1/2 cup oatmeal (dry amount) made with water</p>
                <p>1/2 cup strawberries</p>
                <p>6 egg whites cooked with 1 yolk</p>
                

                <strong>A.M. Snack</strong>
                <p>1 cup green vegetables</p>

                <strong>Lunch</strong>
                <p>Tuna sandwich made with 6-oz. can tuna (in spring water), 2 slices whole-wheat bread, 1 Tbsp. fat-free mayo, 2 leaves romaine lettuce</p>

                <strong>P.M. Snack</strong>
                <p>Protein shake made w/ 40 g whey protein</p>

                <strong>Dinner</strong>
                <p>Chicken salad made with 8 oz. chicken breast, 2 Tbsp. Italian dressing, 1/2 medium tomato, 2 leaves romaine lettuce, 1/2 cup broccoli</p>
                <strong>Benefits</strong>
                <p>1,817 calories, 255 g protein, 98 g carbohydrate, 37 g fat, 20 g fiber</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 20</h3>
                <strong>Breakfast</strong>
                    <br>
                    <p>1 medium bagel with 2 tbsp. reduced-fat peanut butter</p>
                    <p>6 egg whites cooked with 1 yolk</p>

                    <strong>A.M. Snack</strong>
                    <p>1 cup brown long-grain rice (cooked amount)</p>

                    <strong>Lunch</strong>
                    <p>6 oz. lean steak </p>

                    <strong>P.M. Snack</strong>
                    <p>Protein shake made w/ 30-40 g whey protein</p>

                    <strong>Dinner</strong>
                    <p>8 oz. red snapper or halibut</p>
                    <strong>Benefits</strong>
                    <p>1,959 calories, 254 g protein, 132 g carbohydrate, 39 g fat, 17 g fiber</p>
                    <br>
            </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 21</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1/2 cup oatmeal made with water</p>

                <strong>A.M. Snack</strong>
                <p>8 oz. chicken breast</p>

                <strong>Lunch</strong>
                <p>Large baked potato with skin (3-4″ in diameter) </p>

                <strong>P.M. Snack</strong>
                <p>Low-carb, low-sugar protein bar</p>

                <strong>Dinner</strong>
                <p>Omelet made with 8 egg whites and 1 yolk, cooked with 1/2 cup broccoli, 2 mushrooms, fresh salsa</p>
                <strong>Benefits</strong>
                <p>1,862 calories, 226 g protein, 149 g carbohydrate, 35 g fat, 23 g fiber</p>
                <br>
            </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <hr>

        <div class="row">
            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 22</h3>
            <strong>Breakfast</strong>
                <br>
                <p>1 cup whole-grain cereal</p>
                <p>1 cup 1% milk</p>

                <strong>A.M. Snack</strong>
                <p>1 cup green veggies</p>

                <strong>Lunch</strong>
                <p>6 oz. lean steak</p>

                <strong>P.M. Snack</strong>
                <p>Protein shake made w/ 30-40 g whey protein</p>

                <strong>Dinner</strong>
                <p>16-oz. can tuna (in spring water) made with 1 Tbsp. fat-free mayo</p>
                <strong>Benefits</strong>
                <p>1,984 calories, 226 g protein, 200 g carbohydrate, 29 g fat, 28 g fiber</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 23</h3>
            <strong>Breakfast</strong>
                <br>
                <p>1/2 cup oatmeal made with water</p>

                <strong>A.M. Snack</strong>
                <p>8 oz. chicken breast</p>

                <strong>Lunch</strong>
                <p>Large baked potato with skin (3-4″ in diameter) </p>
                <p>8 oz. sliced turkey </p>

                <strong>P.M. Snack</strong>
                <p>Protein shake made w/ 30-40 g whey protein and 1 cup berries</p>

                <strong>Dinner</strong>
                <p>7 oz. lean steak</p>                
                <p>6-8 stalks asparagus</p>                
                <strong>Benefits</strong>
                <p>1,846 calories, 258 g protein, 122 g carbohydrate, 32 g fat, 23 g fiber</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 24</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1 cup whole-grain cereal</p>
                <p>1 cup 1% milk</p>

                <strong>A.M. Snack</strong>
                <p>1 cup green veggies</p>

                <strong>Lunch</strong>
                <p>6 oz. lean steak</p>

                <strong>P.M. Snack</strong>
                <p>Protein shake made w/ 40 g whey protein</p>

                <strong>Dinner</strong>
                <p>Chicken salad made with 8 oz. chicken breast, 2 Tbsp. Italian dressing, 1/2 medium tomato, 2 leaves romaine lettuce, 1/2 cup broccoli</p>
                <strong>Benefits</strong>
                <p>1,817 calories, 255 g protein, 98 g carbohydrate, 37 g fat, 20 g fiber</p>
                <br>
            </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <hr>

        <div class="row">
            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 25</h3>
            <strong>Breakfast</strong>
                <br>
                <p>1/2 cup oatmeal (dry amount) made with water</p>
                <p>1/2 cup strawberries</p>
                <p>6 egg whites cooked with 1 yolk</p>
                

                <strong>A.M. Snack</strong>
                <p>1 cup green vegetables</p>

                <strong>Lunch</strong>
                <p>Tuna sandwich made with 6-oz. can tuna (in spring water), 2 slices whole-wheat bread, 1 Tbsp. fat-free mayo, 2 leaves romaine lettuce</p>

                <strong>P.M. Snack</strong>
                <p>Protein shake made w/ 40 g whey protein</p>

                <strong>Dinner</strong>
                <p>Chicken salad made with 8 oz. chicken breast, 2 Tbsp. Italian dressing, 1/2 medium tomato, 2 leaves romaine lettuce, 1/2 cup broccoli</p>
                <strong>Benefits</strong>
                <p>1,817 calories, 255 g protein, 98 g carbohydrate, 37 g fat, 20 g fiber</p>
                <br>
            </div>
            </div>

        <div class="col-sm-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 26</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1/2 cup oatmeal made with water</p>

                <strong>A.M. Snack</strong>
                <p>8 oz. chicken breast</p>

                <strong>Lunch</strong>
                <p>Large baked potato with skin (3-4″ in diameter) </p>

                <strong>P.M. Snack</strong>
                <p>Low-carb, low-sugar protein bar</p>

                <strong>Dinner</strong>
                <p>Omelet made with 8 egg whites and 1 yolk, cooked with 1/2 cup broccoli, 2 mushrooms, fresh salsa</p>
                <strong>Benefits</strong>
                <p>1,862 calories, 226 g protein, 149 g carbohydrate, 35 g fat, 23 g fiber</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 27</h3>
            <strong>Breakfast</strong>
                <br>
                <p>1 cup whole-grain cereal</p>
                <p>1 cup 1% milk</p>

                <strong>A.M. Snack</strong>
                <p>1 cup green veggies</p>

                <strong>Lunch</strong>
                <p>6 oz. lean steak</p>

                <strong>P.M. Snack</strong>
                <p>Protein shake made w/ 30-40 g whey protein</p>

                <strong>Dinner</strong>
                <p>16-oz. can tuna (in spring water) made with 1 Tbsp. fat-free mayo</p>
                <strong>Benefits</strong>
                <p>1,984 calories, 226 g protein, 200 g carbohydrate, 29 g fat, 28 g fiber</p>
                <br>
            </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <hr>

        <div class="row">
            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 28</h3>
            <strong>Breakfast</strong>
                <br>
                <p>1 cup whole-grain cereal</p>
                <p>1 cup 1% milk</p>

                <strong>A.M. Snack</strong>
                <p>1 cup green veggies</p>

                <strong>Lunch</strong>
                <p>6 oz. lean steak</p>

                <strong>P.M. Snack</strong>
                <p>Protein shake made w/ 30-40 g whey protein</p>

                <strong>Dinner</strong>
                <p>16-oz. can tuna (in spring water) made with 1 Tbsp. fat-free mayo</p>
                <strong>Benefits</strong>
                <p>1,984 calories, 226 g protein, 200 g carbohydrate, 29 g fat, 28 g fiber</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 29</h3>
            <strong>Breakfast</strong>
                <br>
                <p>1/2 cup oatmeal made with water</p>

                <strong>A.M. Snack</strong>
                <p>8 oz. chicken breast</p>

                <strong>Lunch</strong>
                <p>Large baked potato with skin (3-4″ in diameter) </p>
                <p>8 oz. sliced turkey </p>

                <strong>P.M. Snack</strong>
                <p>Protein shake made w/ 30-40 g whey protein and 1 cup berries</p>

                <strong>Dinner</strong>
                <p>7 oz. lean steak</p>                
                <p>6-8 stalks asparagus</p>                
                <strong>Benefits</strong>
                <p>1,846 calories, 258 g protein, 122 g carbohydrate, 32 g fat, 23 g fiber</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 30</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1 cup whole-grain cereal</p>
                <p>1 cup 1% milk</p>

                <strong>A.M. Snack</strong>
                <p>1 cup green veggies</p>

                <strong>Lunch</strong>
                <p>6 oz. lean steak</p>

                <strong>P.M. Snack</strong>
                <p>Protein shake made w/ 40 g whey protein</p>

                <strong>Dinner</strong>
                <p>Chicken salad made with 8 oz. chicken breast, 2 Tbsp. Italian dressing, 1/2 medium tomato, 2 leaves romaine lettuce, 1/2 cup broccoli</p>
                <strong>Benefits</strong>
                <p>1,817 calories, 255 g protein, 98 g carbohydrate, 37 g fat, 20 g fiber</p>
                <br>
            </div>
            </div>
        </div>
    </div>
</body>
</html>