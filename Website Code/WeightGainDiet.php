<!DOCTYPE html>
<html>

<head>
    <title>Weight Gain Diet</title>
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
                <p>2 servings Vegan Freezer Breakfast Burritos</p>
                <p>1 cup strawberries</p>

                <strong>A.M. Snack</strong>
                <p>1 serving Almond-Honey Power Bar</p>

                <strong>Lunch</strong>
                <p>2 servings Vegetable & Tuna Pasta Salad</p>
                <p>1 cup mango chunks</p>

                <strong>P.M. Snack</strong>
                <p>1 large apple</p>
                <p>1 Tbsp. natural peanut butter</p>
`
                <strong>Dinner</strong>
                <p>1 serving Sheet-Pan Maple-Mustard Pork Chops and Carrots</p>
                <p>1 1/2 cups Easy Brown Rice</p>
                <strong>Benefits</strong>
                <p>2,514 calories, 104 g protein, 340 g carbohydrates, 45 g fiber, 88 g fat, 2,563 mg sodium</p>
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
                <p>1 serving Raspberry Peach Mango Smoothie Bowl</p>
                <p>1 hard-boiled egg</p>

                <strong>A.M. Snack</strong>
                <p>15 baby carrots</p>
                <p>15 baby carrots</p>
                <p>1 medium orange</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>1 serving Homemade Microwave Popcorn</p>
                <p>1 large banana</p>

                <strong>Dinner</strong>
                <p>2 servings Philly Cheese Steak Sloppy Joes</p>
                <p>2 cups fresh spinach & 1 cup shredded carrots topped with ½ Tbsp. olive oil & ½ Tbsp. balsamic vinegar</p>
                <strong>Benefits</strong>
                <p>2,486 calories, 120 g protein, 298 g carbohydrates, 64 g fiber, 98 g fat, 2,470 mg sodium</p>
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
                <p>2 servings Maple-Nut Granola</p>
                <p>1 cup 2% milk</p>

                <strong>A.M. Snack</strong>
                <p>1 slice Swiss cheese</p>
                <p>8 whole-wheat crackers</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>6 oz. 2% plain Greek yogurt</p>
                <p>1 cup strawberries</p>

                <strong>Dinner</strong>
                <p>2 servings Creamy Chicken, Brussels Sprouts and Mushroom One-Pot Pasta</p>
                <strong>Benefits</strong>
                <p>2,505 calories, 116 g protein, 315 g carbohydrates, 48 g fiber, 94 g fat, 2,052 mg sodium</p>
                <br>
            </div>
            </div>
        </div>


        <br>
        <br>
        <br>
        <br>
        

        <div class="row">
            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 4</h3>
                <strong>Breakfast</strong>
                <br>
                <p>2 servings Maple-Nut Granola</p>
                <p>1 cup 2% milk</p>

                <strong>A.M. Snack</strong>
                <p>15 carrot sticks</p>
                <p>1/4 cup hummus</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>4 graham crackers</p>
                <p>1 medium apple</p>

                <strong>Dinner</strong>
                <p>1 serving Southern Style Oven-Fried Chicken</p>
                <p>1 serving Greek Potato Salad</p>
                <strong>Benefits</strong>
                <p>2,499 calories, 81 g protein, 330 g carbohydrates, 53 g fiber, 101 g fat, 2,471 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 5</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1 serving Raspberry Peach Mango Smoothie Bowl</p>
                <p>2 hard-boiled eggs</p>

                <strong>A.M. Snack</strong>
                <p>2 servings Almond-Honey Power Bars</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>2 servings Homemade Microwave Popcorn</p>
                
                <strong>Dinner</strong>
                <p>2 servings Green Goddess Salad with Chicken</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>
                <strong>Benefits</strong>
                <p>2,509 calories, 157 g protein, 295 g carbohydrates, 60 g fiber, 86 g fat, 1,579 mg sodium</p>
                <br>
            </div>    
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 6</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1 serving Raspberry Peach Mango Smoothie Bowl</p>
                <p>1 hard-boiled egg</p>

                <strong>A.M. Snack</strong>
                <p>15 baby carrots</p>
                <p>15 baby carrots</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>1 serving Homemade Microwave Popcorn</p>

                <strong>Dinner</strong>
                <p>2 servings Philly Cheese Steak Sloppy Joes</p>
                <p>2 cups fresh spinach & 1 cup shredded carrots topped with ½ Tbsp. olive oil & ½ Tbsp. balsamic vinegar</p>
                <strong>Benefits</strong>
                <p>2,486 calories, 120 g protein, 298 g carbohydrates, 64 g fiber, 98 g fat, 2,470 mg sodium</p>
                <br>
            </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>

        <div class="row">
            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 7</h3>
            <strong>Breakfast</strong>
                <br>
                <p>2 servings Vegan Freezer Breakfast Burritos</p>
                <p>1 cup strawberries</p>

                <strong>A.M. Snack</strong>
                <p>1 serving Almond-Honey Power Bar</p>

                <strong>Lunch</strong>
                <p>2 servings Vegetable & Tuna Pasta Salad</p>
                <p>1 cup mango chunks</p>

                <strong>P.M. Snack</strong>
                <p>1 large apple</p>
                <p>1 Tbsp. natural peanut butter</p>
`
                <strong>Dinner</strong>
                <p>1 serving Sheet-Pan Maple-Mustard Pork Chops and Carrots</p>
                <p>1 1/2 cups Easy Brown Rice</p>
                <strong>Benefits</strong>
                <p>2,514 calories, 104 g protein, 340 g carbohydrates, 45 g fiber, 88 g fat, 2,563 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 8</h3>
                <strong>Breakfast</strong>
                <br>
                <p>2 servings Maple-Nut Granola</p>
                <p>1 cup 2% milk</p>

                <strong>A.M. Snack</strong>
                <p>1 slice Swiss cheese</p>
                <p>8 whole-wheat crackers</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>6 oz. 2% plain Greek yogurt</p>
                <p>1 cup strawberries</p>

                <strong>Dinner</strong>
                <p>2 servings Creamy Chicken, Brussels Sprouts and Mushroom One-Pot Pasta</p>
                <strong>Benefits</strong>
                <p>2,505 calories, 116 g protein, 315 g carbohydrates, 48 g fiber, 94 g fat, 2,052 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 9</h3>
                <strong>Breakfast</strong>
                <br>
                <p>2 servings Maple-Nut Granola</p>
                <p>1 cup 2% milk</p>

                <strong>A.M. Snack</strong>
                <p>15 carrot sticks</p>
                <p>1/4 cup hummus</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>4 graham crackers</p>
                <p>1 medium apple</p>

                <strong>Dinner</strong>
                <p>1 serving Southern Style Oven-Fried Chicken</p>
                <p>1 serving Greek Potato Salad</p>
                <strong>Benefits</strong>
                <p>2,499 calories, 81 g protein, 330 g carbohydrates, 53 g fiber, 101 g fat, 2,471 mg sodium</p>
                <br>
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 10</h3>
                <strong>Breakfast</strong>
                <br>
                <p>2 servings Vegan Freezer Breakfast Burritos</p>
                <p>1 cup strawberries</p>

                <strong>A.M. Snack</strong>
                <p>1 serving Almond-Honey Power Bar</p>

                <strong>Lunch</strong>
                <p>2 servings Vegetable & Tuna Pasta Salad</p>
                <p>1 cup mango chunks</p>

                <strong>P.M. Snack</strong>
                <p>1 large apple</p>
                <p>1 Tbsp. natural peanut butter</p>
`
                <strong>Dinner</strong>
                <p>1 serving Sheet-Pan Maple-Mustard Pork Chops and Carrots</p>
                <p>1 1/2 cups Easy Brown Rice</p>
                <strong>Benefits</strong>
                <p>2,514 calories, 104 g protein, 340 g carbohydrates, 45 g fiber, 88 g fat, 2,563 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 11</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1 serving Raspberry Peach Mango Smoothie Bowl</p>
                <p>1 hard-boiled egg</p>

                <strong>A.M. Snack</strong>
                <p>15 baby carrots</p>
                <p>15 baby carrots</p>
                <p>1 medium orange</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>1 serving Homemade Microwave Popcorn</p>
                <p>1 large banana</p>

                <strong>Dinner</strong>
                <p>2 servings Philly Cheese Steak Sloppy Joes</p>
                <p>2 cups fresh spinach & 1 cup shredded carrots topped with ½ Tbsp. olive oil & ½ Tbsp. balsamic vinegar</p>
                <strong>Benefits</strong>
                <p>2,486 calories, 120 g protein, 298 g carbohydrates, 64 g fiber, 98 g fat, 2,470 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 12</h3>
                <strong>Breakfast</strong>
                <br>
                <p>2 servings Maple-Nut Granola</p>
                <p>1 cup 2% milk</p>

                <strong>A.M. Snack</strong>
                <p>1 slice Swiss cheese</p>
                <p>8 whole-wheat crackers</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>6 oz. 2% plain Greek yogurt</p>
                <p>1 cup strawberries</p>

                <strong>Dinner</strong>
                <p>2 servings Creamy Chicken, Brussels Sprouts and Mushroom One-Pot Pasta</p>
                <strong>Benefits</strong>
                <p>2,505 calories, 116 g protein, 315 g carbohydrates, 48 g fiber, 94 g fat, 2,052 mg sodium</p>
                <br>
            </div>
            </div>
        </div>


        <br>
        <br>
        <br>
        <br>
        

        <div class="row">
            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 13</h3>
                <strong>Breakfast</strong>
                <br>
                <p>2 servings Maple-Nut Granola</p>
                <p>1 cup 2% milk</p>

                <strong>A.M. Snack</strong>
                <p>15 carrot sticks</p>
                <p>1/4 cup hummus</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>4 graham crackers</p>
                <p>1 medium apple</p>

                <strong>Dinner</strong>
                <p>1 serving Southern Style Oven-Fried Chicken</p>
                <p>1 serving Greek Potato Salad</p>
                <strong>Benefits</strong>
                <p>2,499 calories, 81 g protein, 330 g carbohydrates, 53 g fiber, 101 g fat, 2,471 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 14</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1 serving Raspberry Peach Mango Smoothie Bowl</p>
                <p>2 hard-boiled eggs</p>

                <strong>A.M. Snack</strong>
                <p>2 servings Almond-Honey Power Bars</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>2 servings Homemade Microwave Popcorn</p>
                
                <strong>Dinner</strong>
                <p>2 servings Green Goddess Salad with Chicken</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>
                <strong>Benefits</strong>
                <p>2,509 calories, 157 g protein, 295 g carbohydrates, 60 g fiber, 86 g fat, 1,579 mg sodium</p>
                <br>
            </div>    
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 15</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1 serving Raspberry Peach Mango Smoothie Bowl</p>
                <p>1 hard-boiled egg</p>

                <strong>A.M. Snack</strong>
                <p>15 baby carrots</p>
                <p>15 baby carrots</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>1 serving Homemade Microwave Popcorn</p>

                <strong>Dinner</strong>
                <p>2 servings Philly Cheese Steak Sloppy Joes</p>
                <p>2 cups fresh spinach & 1 cup shredded carrots topped with ½ Tbsp. olive oil & ½ Tbsp. balsamic vinegar</p>
                <strong>Benefits</strong>
                <p>2,486 calories, 120 g protein, 298 g carbohydrates, 64 g fiber, 98 g fat, 2,470 mg sodium</p>
                <br>
            </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>

        <div class="row">
            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 16</h3>
            <strong>Breakfast</strong>
                <br>
                <p>2 servings Vegan Freezer Breakfast Burritos</p>
                <p>1 cup strawberries</p>

                <strong>A.M. Snack</strong>
                <p>1 serving Almond-Honey Power Bar</p>

                <strong>Lunch</strong>
                <p>2 servings Vegetable & Tuna Pasta Salad</p>
                <p>1 cup mango chunks</p>

                <strong>P.M. Snack</strong>
                <p>1 large apple</p>
                <p>1 Tbsp. natural peanut butter</p>
`
                <strong>Dinner</strong>
                <p>1 serving Sheet-Pan Maple-Mustard Pork Chops and Carrots</p>
                <p>1 1/2 cups Easy Brown Rice</p>
                <strong>Benefits</strong>
                <p>2,514 calories, 104 g protein, 340 g carbohydrates, 45 g fiber, 88 g fat, 2,563 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 17</h3>
                <strong>Breakfast</strong>
                <br>
                <p>2 servings Maple-Nut Granola</p>
                <p>1 cup 2% milk</p>

                <strong>A.M. Snack</strong>
                <p>1 slice Swiss cheese</p>
                <p>8 whole-wheat crackers</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>6 oz. 2% plain Greek yogurt</p>
                <p>1 cup strawberries</p>

                <strong>Dinner</strong>
                <p>2 servings Creamy Chicken, Brussels Sprouts and Mushroom One-Pot Pasta</p>
                <strong>Benefits</strong>
                <p>2,505 calories, 116 g protein, 315 g carbohydrates, 48 g fiber, 94 g fat, 2,052 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 18</h3>
                <strong>Breakfast</strong>
                <br>
                <p>2 servings Maple-Nut Granola</p>
                <p>1 cup 2% milk</p>

                <strong>A.M. Snack</strong>
                <p>15 carrot sticks</p>
                <p>1/4 cup hummus</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>4 graham crackers</p>
                <p>1 medium apple</p>

                <strong>Dinner</strong>
                <p>1 serving Southern Style Oven-Fried Chicken</p>
                <p>1 serving Greek Potato Salad</p>
                <strong>Benefits</strong>
                <p>2,499 calories, 81 g protein, 330 g carbohydrates, 53 g fiber, 101 g fat, 2,471 mg sodium</p>
                <br>
            </div>
            </div>
        </div>    

        <div class="row">
            <div class="col-sm-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 19</h3>
                <strong>Breakfast</strong>
                <br>
                <p>2 servings Vegan Freezer Breakfast Burritos</p>
                <p>1 cup strawberries</p>

                <strong>A.M. Snack</strong>
                <p>1 serving Almond-Honey Power Bar</p>

                <strong>Lunch</strong>
                <p>2 servings Vegetable & Tuna Pasta Salad</p>
                <p>1 cup mango chunks</p>

                <strong>P.M. Snack</strong>
                <p>1 large apple</p>
                <p>1 Tbsp. natural peanut butter</p>
`
                <strong>Dinner</strong>
                <p>1 serving Sheet-Pan Maple-Mustard Pork Chops and Carrots</p>
                <p>1 1/2 cups Easy Brown Rice</p>
                <strong>Benefits</strong>
                <p>2,514 calories, 104 g protein, 340 g carbohydrates, 45 g fiber, 88 g fat, 2,563 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 20</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1 serving Raspberry Peach Mango Smoothie Bowl</p>
                <p>1 hard-boiled egg</p>

                <strong>A.M. Snack</strong>
                <p>15 baby carrots</p>
                <p>15 baby carrots</p>
                <p>1 medium orange</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>1 serving Homemade Microwave Popcorn</p>
                <p>1 large banana</p>

                <strong>Dinner</strong>
                <p>2 servings Philly Cheese Steak Sloppy Joes</p>
                <p>2 cups fresh spinach & 1 cup shredded carrots topped with ½ Tbsp. olive oil & ½ Tbsp. balsamic vinegar</p>
                <strong>Benefits</strong>
                <p>2,486 calories, 120 g protein, 298 g carbohydrates, 64 g fiber, 98 g fat, 2,470 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 21</h3>
                <strong>Breakfast</strong>
                <br>
                <p>2 servings Maple-Nut Granola</p>
                <p>1 cup 2% milk</p>

                <strong>A.M. Snack</strong>
                <p>1 slice Swiss cheese</p>
                <p>8 whole-wheat crackers</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>6 oz. 2% plain Greek yogurt</p>
                <p>1 cup strawberries</p>

                <strong>Dinner</strong>
                <p>2 servings Creamy Chicken, Brussels Sprouts and Mushroom One-Pot Pasta</p>
                <strong>Benefits</strong>
                <p>2,505 calories, 116 g protein, 315 g carbohydrates, 48 g fiber, 94 g fat, 2,052 mg sodium</p>
                <br>
            </div>
            </div>
        </div>


        <br>
        <br>
        <br>
        <br>
        

        <div class="row">
            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 22</h3>
                <strong>Breakfast</strong>
                <br>
                <p>2 servings Maple-Nut Granola</p>
                <p>1 cup 2% milk</p>

                <strong>A.M. Snack</strong>
                <p>15 carrot sticks</p>
                <p>1/4 cup hummus</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>4 graham crackers</p>
                <p>1 medium apple</p>

                <strong>Dinner</strong>
                <p>1 serving Southern Style Oven-Fried Chicken</p>
                <p>1 serving Greek Potato Salad</p>
                <strong>Benefits</strong>
                <p>2,499 calories, 81 g protein, 330 g carbohydrates, 53 g fiber, 101 g fat, 2,471 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 23</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1 serving Raspberry Peach Mango Smoothie Bowl</p>
                <p>2 hard-boiled eggs</p>

                <strong>A.M. Snack</strong>
                <p>2 servings Almond-Honey Power Bars</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>2 servings Homemade Microwave Popcorn</p>
                
                <strong>Dinner</strong>
                <p>2 servings Green Goddess Salad with Chicken</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>
                <strong>Benefits</strong>
                <p>2,509 calories, 157 g protein, 295 g carbohydrates, 60 g fiber, 86 g fat, 1,579 mg sodium</p>
                <br>
            </div>    
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 24</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1 serving Raspberry Peach Mango Smoothie Bowl</p>
                <p>1 hard-boiled egg</p>

                <strong>A.M. Snack</strong>
                <p>15 baby carrots</p>
                <p>15 baby carrots</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>1 serving Homemade Microwave Popcorn</p>

                <strong>Dinner</strong>
                <p>2 servings Philly Cheese Steak Sloppy Joes</p>
                <p>2 cups fresh spinach & 1 cup shredded carrots topped with ½ Tbsp. olive oil & ½ Tbsp. balsamic vinegar</p>
                <strong>Benefits</strong>
                <p>2,486 calories, 120 g protein, 298 g carbohydrates, 64 g fiber, 98 g fat, 2,470 mg sodium</p>
                <br>
            </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>

        <div class="row">
            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 25</h3>
            <strong>Breakfast</strong>
                <br>
                <p>2 servings Vegan Freezer Breakfast Burritos</p>
                <p>1 cup strawberries</p>

                <strong>A.M. Snack</strong>
                <p>1 serving Almond-Honey Power Bar</p>

                <strong>Lunch</strong>
                <p>2 servings Vegetable & Tuna Pasta Salad</p>
                <p>1 cup mango chunks</p>

                <strong>P.M. Snack</strong>
                <p>1 large apple</p>
                <p>1 Tbsp. natural peanut butter</p>
`
                <strong>Dinner</strong>
                <p>1 serving Sheet-Pan Maple-Mustard Pork Chops and Carrots</p>
                <p>1 1/2 cups Easy Brown Rice</p>
                <strong>Benefits</strong>
                <p>2,514 calories, 104 g protein, 340 g carbohydrates, 45 g fiber, 88 g fat, 2,563 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 26</h3>
                <strong>Breakfast</strong>
                <br>
                <p>2 servings Maple-Nut Granola</p>
                <p>1 cup 2% milk</p>

                <strong>A.M. Snack</strong>
                <p>1 slice Swiss cheese</p>
                <p>8 whole-wheat crackers</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>6 oz. 2% plain Greek yogurt</p>
                <p>1 cup strawberries</p>

                <strong>Dinner</strong>
                <p>2 servings Creamy Chicken, Brussels Sprouts and Mushroom One-Pot Pasta</p>
                <strong>Benefits</strong>
                <p>2,505 calories, 116 g protein, 315 g carbohydrates, 48 g fiber, 94 g fat, 2,052 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 27</h3>
                <strong>Breakfast</strong>
                <br>
                <p>2 servings Maple-Nut Granola</p>
                <p>1 cup 2% milk</p>

                <strong>A.M. Snack</strong>
                <p>15 carrot sticks</p>
                <p>1/4 cup hummus</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>4 graham crackers</p>
                <p>1 medium apple</p>

                <strong>Dinner</strong>
                <p>1 serving Southern Style Oven-Fried Chicken</p>
                <p>1 serving Greek Potato Salad</p>
                <strong>Benefits</strong>
                <p>2,499 calories, 81 g protein, 330 g carbohydrates, 53 g fiber, 101 g fat, 2,471 mg sodium</p>
                <br>
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 28</h3>
                <strong>Breakfast</strong>
                <br>
                <p>2 servings Maple-Nut Granola</p>
                <p>1 cup 2% milk</p>

                <strong>A.M. Snack</strong>
                <p>15 carrot sticks</p>
                <p>1/4 cup hummus</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>4 graham crackers</p>
                <p>1 medium apple</p>

                <strong>Dinner</strong>
                <p>1 serving Southern Style Oven-Fried Chicken</p>
                <p>1 serving Greek Potato Salad</p>
                <strong>Benefits</strong>
                <p>2,499 calories, 81 g protein, 330 g carbohydrates, 53 g fiber, 101 g fat, 2,471 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 29</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1 serving Raspberry Peach Mango Smoothie Bowl</p>
                <p>2 hard-boiled eggs</p>

                <strong>A.M. Snack</strong>
                <p>2 servings Almond-Honey Power Bars</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>2 servings Homemade Microwave Popcorn</p>
                
                <strong>Dinner</strong>
                <p>2 servings Green Goddess Salad with Chicken</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>
                <strong>Benefits</strong>
                <p>2,509 calories, 157 g protein, 295 g carbohydrates, 60 g fiber, 86 g fat, 1,579 mg sodium</p>
                <br>
            </div>    
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 30</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1 serving Raspberry Peach Mango Smoothie Bowl</p>
                <p>1 hard-boiled egg</p>

                <strong>A.M. Snack</strong>
                <p>15 baby carrots</p>
                <p>15 baby carrots</p>

                <strong>Lunch</strong>
                <p>1 serving Roasted Butternut Squash & Root Vegetables with Cauliflower Gnocchi</p>
                <p>1 slice whole-wheat toast with 1 tsp. unsalted butter</p>

                <strong>P.M. Snack</strong>
                <p>1 serving Homemade Microwave Popcorn</p>

                <strong>Dinner</strong>
                <p>2 servings Philly Cheese Steak Sloppy Joes</p>
                <p>2 cups fresh spinach & 1 cup shredded carrots topped with ½ Tbsp. olive oil & ½ Tbsp. balsamic vinegar</p>
                <strong>Benefits</strong>
                <p>2,486 calories, 120 g protein, 298 g carbohydrates, 64 g fiber, 98 g fat, 2,470 mg sodium</p>
                <br>
            </div>
            </div>
        </div> 

    </div>
</body>
</html>