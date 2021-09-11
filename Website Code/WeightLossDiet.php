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
                <p>1 serving Avocado-Egg Toast</p>

                <strong>A.M. Snack</strong>
                <p> 1 medium orange</p>

                <strong>Lunch</strong>
                <p>1 serving Butternut Squash Soup with Avocado & Chickpeas</p>

                <strong>P.M. Snack</strong>
                <p>1 medium kiwi</p>

                <strong>Dinner</strong>
                <p>1 serving Citrus Poached Salmon with Asparagus with 3/4 cup Cauliflower Rice</p>
                <strong>Benefits</strong>
                <p>1,228 calories, 58 g protein, 126 g carbohydrates, 30 g fiber, 59 g fat, 1,709 mg sodium</p>
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
                    <p>1 serving Blueberry-Banana Overnight Oats</p>

                    <strong>A.M. Snack</strong>
                    <p>1 serving Apple Cider Vinegar Tonic</p>

                    <strong>Lunch</strong>
                    <p>1 1/2 cups Slow-Cooker Vegetable Soup with 1 slice Everything Bagel Avocado Toast </p>

                    <strong>P.M. Snack</strong>
                    <p>1/2 cup edamame (in pods) sprinkled with a pinch of coarse sea salt</p>

                    <strong>Dinner</strong>
                    <p>1 serving Vegan Coconut Chickpea Curry</p>
                    <strong>Benefits</strong>
                    <p>1,225 calories, 41 g protein, 181 g carbohydrates, 36 g fiber, 41 g fat, 1,842 mg sodium</p>
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
                <p>1/2 cups Blueberry-Banana Overnight Oats</p>

                <strong>A.M. Snack</strong>
                <p>1 medium orange</p>

                <strong>Lunch</strong>
                <p>1/2 cups Slow-Cooker Vegetable Soup with 1 slice Everything Bagel Avocado Toast  </p>

                <strong>P.M. Snack</strong>
                <p>2 medium kiwis</p>

                <strong>Dinner</strong>
                <p>1 serving Zucchini Noodles with Pesto & Chicken</p>
                <strong>Benefits</strong>
                <p>1,208 calories, 54 g protein, 146 g carbohydrates, 31 g fiber, 52 g fat, 1,715 mg sodium</p>
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
                <p>1 slice Peanut Butter-Banana Cinnamon Toast</p>

                <strong>A.M. Snack</strong>
                <p>1 cup Apple Cider Vinegar Tonic with 1 cup blueberries</p>

                <strong>Lunch</strong>
                <p>1 serving Green Salad with Edamame & Beets</p>

                <strong>P.M. Snack</strong>
                <p>1 medium orange</p>

                <strong>Dinner</strong>
                <p>1 serving Spicy Jerk Shrimp with 1/2 cup Easy Brown Rice</p>
                <strong>Benefits</strong>
                <p>1,223 calories, 65 g protein, 166 g carbohydrates, 30 g fiber, 35 g fat, 1,282 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 5</h3>
            <strong>Breakfast</strong>
                <br>
                <p>1 slice Peanut Butter-Banana Cinnamon Toast</p>

                <strong>A.M. Snack</strong>
                <p>1 kiwi</p>

                <strong>Lunch</strong>
                <p>1/2 cups Slow-Cooker Vegetable Soup with 3 Tbsp. hummus and 6 seeded crackers </p>

                <strong>P.M. Snack</strong>
                <p>1 kiwi</p>

                <strong>Dinner</strong>
                <p>1 serving Taco Spaghetti Squash Boats</p>
                <strong>Benefits</strong>
                <p>1,221 calories, 55 g protein, 129 g carbohydrates, 30 g fiber, 60 g fat, 1,803 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 6</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1 serving Blueberry-Banana Overnight Oats</p>

                <strong>A.M. Snack</strong>
                <p>1 serving Apple Cider Vinegar Tonic</p>

                <strong>Lunch</strong>
                <p>1 1/2 cups Slow-Cooker Vegetable Soup with 1 slice Everything Bagel Avocado Toast </p>

                <strong>P.M. Snack</strong>
                <p>1/2 cup edamame (in pods) sprinkled with a pinch of coarse sea salt</p>

                <strong>Dinner</strong>
                <p>1 serving Vegan Coconut Chickpea Curry</p>
                <strong>Benefits</strong>
                <p>1,225 calories, 41 g protein, 181 g carbohydrates, 36 g fiber, 41 g fat, 1,842 mg sodium</p>
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
                <p>1 serving Avocado-Egg Toast</p>

                <strong>A.M. Snack</strong>
                <p> 1 medium orange</p>

                <strong>Lunch</strong>
                <p>1 serving Butternut Squash Soup with Avocado & Chickpeas</p>

                <strong>P.M. Snack</strong>
                <p>1 medium kiwi</p>

                <strong>Dinner</strong>
                <p>1 serving Citrus Poached Salmon with Asparagus with 3/4 cup Cauliflower Rice</p>
                <strong>Benefits</strong>
                <p>1,228 calories, 58 g protein, 126 g carbohydrates, 30 g fiber, 59 g fat, 1,709 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 8</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1/2 cups Blueberry-Banana Overnight Oats</p>

                <strong>A.M. Snack</strong>
                <p>1 medium orange</p>

                <strong>Lunch</strong>
                <p>1/2 cups Slow-Cooker Vegetable Soup with 1 slice Everything Bagel Avocado Toast  </p>

                <strong>P.M. Snack</strong>
                <p>2 medium kiwis</p>

                <strong>Dinner</strong>
                <p>1 serving Zucchini Noodles with Pesto & Chicken</p>
                <strong>Benefits</strong>
                <p>1,208 calories, 54 g protein, 146 g carbohydrates, 31 g fiber, 52 g fat, 1,715 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 9</h3>
            <strong>Breakfast</strong>
                <br>
                <p>1 slice Peanut Butter-Banana Cinnamon Toast</p>

                <strong>A.M. Snack</strong>
                <p>1 cup Apple Cider Vinegar Tonic with 1 cup blueberries</p>

                <strong>Lunch</strong>
                <p>1 serving Green Salad with Edamame & Beets</p>

                <strong>P.M. Snack</strong>
                <p>1 medium orange</p>

                <strong>Dinner</strong>
                <p>1 serving Spicy Jerk Shrimp with 1/2 cup Easy Brown Rice</p>
                <strong>Benefits</strong>
                <p>1,223 calories, 65 g protein, 166 g carbohydrates, 30 g fiber, 35 g fat, 1,282 mg sodium</p>
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
                <p>1 serving Avocado-Egg Toast</p>

                <strong>A.M. Snack</strong>
                <p> 1 medium orange</p>

                <strong>Lunch</strong>
                <p>1 serving Butternut Squash Soup with Avocado & Chickpeas</p>

                <strong>P.M. Snack</strong>
                <p>1 medium kiwi</p>

                <strong>Dinner</strong>
                <p>1 serving Citrus Poached Salmon with Asparagus with 3/4 cup Cauliflower Rice</p>
                <strong>Benefits</strong>
                <p>1,228 calories, 58 g protein, 126 g carbohydrates, 30 g fiber, 59 g fat, 1,709 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 11</h3>
                <strong>Breakfast</strong>
                    <br>
                    <p>1 serving Blueberry-Banana Overnight Oats</p>

                    <strong>A.M. Snack</strong>
                    <p>1 serving Apple Cider Vinegar Tonic</p>

                    <strong>Lunch</strong>
                    <p>1 1/2 cups Slow-Cooker Vegetable Soup with 1 slice Everything Bagel Avocado Toast </p>

                    <strong>P.M. Snack</strong>
                    <p>1/2 cup edamame (in pods) sprinkled with a pinch of coarse sea salt</p>

                    <strong>Dinner</strong>
                    <p>1 serving Vegan Coconut Chickpea Curry</p>
                    <strong>Benefits</strong>
                    <p>1,225 calories, 41 g protein, 181 g carbohydrates, 36 g fiber, 41 g fat, 1,842 mg sodium</p>
                    <br>
                </div>
                </div>

            <div class="col-sm-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 12</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1/2 cups Blueberry-Banana Overnight Oats</p>

                <strong>A.M. Snack</strong>
                <p>1 medium orange</p>

                <strong>Lunch</strong>
                <p>1/2 cups Slow-Cooker Vegetable Soup with 1 slice Everything Bagel Avocado Toast  </p>

                <strong>P.M. Snack</strong>
                <p>2 medium kiwis</p>

                <strong>Dinner</strong>
                <p>1 serving Zucchini Noodles with Pesto & Chicken</p>
                <strong>Benefits</strong>
                <p>1,208 calories, 54 g protein, 146 g carbohydrates, 31 g fiber, 52 g fat, 1,715 mg sodium</p>
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
                <p>1 slice Peanut Butter-Banana Cinnamon Toast</p>

                <strong>A.M. Snack</strong>
                <p>1 cup Apple Cider Vinegar Tonic with 1 cup blueberries</p>

                <strong>Lunch</strong>
                <p>1 serving Green Salad with Edamame & Beets</p>

                <strong>P.M. Snack</strong>
                <p>1 medium orange</p>

                <strong>Dinner</strong>
                <p>1 serving Spicy Jerk Shrimp with 1/2 cup Easy Brown Rice</p>
                <strong>Benefits</strong>
                <p>1,223 calories, 65 g protein, 166 g carbohydrates, 30 g fiber, 35 g fat, 1,282 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 14</h3>
            <strong>Breakfast</strong>
                <br>
                <p>1 slice Peanut Butter-Banana Cinnamon Toast</p>

                <strong>A.M. Snack</strong>
                <p>1 kiwi</p>

                <strong>Lunch</strong>
                <p>1/2 cups Slow-Cooker Vegetable Soup with 3 Tbsp. hummus and 6 seeded crackers </p>

                <strong>P.M. Snack</strong>
                <p>1 kiwi</p>

                <strong>Dinner</strong>
                <p>1 serving Taco Spaghetti Squash Boats</p>
                <strong>Benefits</strong>
                <p>1,221 calories, 55 g protein, 129 g carbohydrates, 30 g fiber, 60 g fat, 1,803 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 15</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1 serving Blueberry-Banana Overnight Oats</p>

                <strong>A.M. Snack</strong>
                <p>1 serving Apple Cider Vinegar Tonic</p>

                <strong>Lunch</strong>
                <p>1 1/2 cups Slow-Cooker Vegetable Soup with 1 slice Everything Bagel Avocado Toast </p>

                <strong>P.M. Snack</strong>
                <p>1/2 cup edamame (in pods) sprinkled with a pinch of coarse sea salt</p>

                <strong>Dinner</strong>
                <p>1 serving Vegan Coconut Chickpea Curry</p>
                <strong>Benefits</strong>
                <p>1,225 calories, 41 g protein, 181 g carbohydrates, 36 g fiber, 41 g fat, 1,842 mg sodium</p>
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
                <p>1 serving Avocado-Egg Toast</p>

                <strong>A.M. Snack</strong>
                <p> 1 medium orange</p>

                <strong>Lunch</strong>
                <p>1 serving Butternut Squash Soup with Avocado & Chickpeas</p>

                <strong>P.M. Snack</strong>
                <p>1 medium kiwi</p>

                <strong>Dinner</strong>
                <p>1 serving Citrus Poached Salmon with Asparagus with 3/4 cup Cauliflower Rice</p>
                <strong>Benefits</strong>
                <p>1,228 calories, 58 g protein, 126 g carbohydrates, 30 g fiber, 59 g fat, 1,709 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 17</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1/2 cups Blueberry-Banana Overnight Oats</p>

                <strong>A.M. Snack</strong>
                <p>1 medium orange</p>

                <strong>Lunch</strong>
                <p>1/2 cups Slow-Cooker Vegetable Soup with 1 slice Everything Bagel Avocado Toast  </p>

                <strong>P.M. Snack</strong>
                <p>2 medium kiwis</p>

                <strong>Dinner</strong>
                <p>1 serving Zucchini Noodles with Pesto & Chicken</p>
                <strong>Benefits</strong>
                <p>1,208 calories, 54 g protein, 146 g carbohydrates, 31 g fiber, 52 g fat, 1,715 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 18</h3>
            <strong>Breakfast</strong>
                <br>
                <p>1 slice Peanut Butter-Banana Cinnamon Toast</p>

                <strong>A.M. Snack</strong>
                <p>1 cup Apple Cider Vinegar Tonic with 1 cup blueberries</p>

                <strong>Lunch</strong>
                <p>1 serving Green Salad with Edamame & Beets</p>

                <strong>P.M. Snack</strong>
                <p>1 medium orange</p>

                <strong>Dinner</strong>
                <p>1 serving Spicy Jerk Shrimp with 1/2 cup Easy Brown Rice</p>
                <strong>Benefits</strong>
                <p>1,223 calories, 65 g protein, 166 g carbohydrates, 30 g fiber, 35 g fat, 1,282 mg sodium</p>
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
                <p>1 serving Avocado-Egg Toast</p>

                <strong>A.M. Snack</strong>
                <p> 1 medium orange</p>

                <strong>Lunch</strong>
                <p>1 serving Butternut Squash Soup with Avocado & Chickpeas</p>

                <strong>P.M. Snack</strong>
                <p>1 medium kiwi</p>

                <strong>Dinner</strong>
                <p>1 serving Citrus Poached Salmon with Asparagus with 3/4 cup Cauliflower Rice</p>
                <strong>Benefits</strong>
                <p>1,228 calories, 58 g protein, 126 g carbohydrates, 30 g fiber, 59 g fat, 1,709 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 20</h3>
                <strong>Breakfast</strong>
                    <br>
                    <p>1 serving Blueberry-Banana Overnight Oats</p>

                    <strong>A.M. Snack</strong>
                    <p>1 serving Apple Cider Vinegar Tonic</p>

                    <strong>Lunch</strong>
                    <p>1 1/2 cups Slow-Cooker Vegetable Soup with 1 slice Everything Bagel Avocado Toast </p>

                    <strong>P.M. Snack</strong>
                    <p>1/2 cup edamame (in pods) sprinkled with a pinch of coarse sea salt</p>

                    <strong>Dinner</strong>
                    <p>1 serving Vegan Coconut Chickpea Curry</p>
                    <strong>Benefits</strong>
                    <p>1,225 calories, 41 g protein, 181 g carbohydrates, 36 g fiber, 41 g fat, 1,842 mg sodium</p>
                    <br>
                </div>
                </div>

            <div class="col-sm-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 21</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1/2 cups Blueberry-Banana Overnight Oats</p>

                <strong>A.M. Snack</strong>
                <p>1 medium orange</p>

                <strong>Lunch</strong>
                <p>1/2 cups Slow-Cooker Vegetable Soup with 1 slice Everything Bagel Avocado Toast  </p>

                <strong>P.M. Snack</strong>
                <p>2 medium kiwis</p>

                <strong>Dinner</strong>
                <p>1 serving Zucchini Noodles with Pesto & Chicken</p>
                <strong>Benefits</strong>
                <p>1,208 calories, 54 g protein, 146 g carbohydrates, 31 g fiber, 52 g fat, 1,715 mg sodium</p>
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
                <p>1 slice Peanut Butter-Banana Cinnamon Toast</p>

                <strong>A.M. Snack</strong>
                <p>1 cup Apple Cider Vinegar Tonic with 1 cup blueberries</p>

                <strong>Lunch</strong>
                <p>1 serving Green Salad with Edamame & Beets</p>

                <strong>P.M. Snack</strong>
                <p>1 medium orange</p>

                <strong>Dinner</strong>
                <p>1 serving Spicy Jerk Shrimp with 1/2 cup Easy Brown Rice</p>
                <strong>Benefits</strong>
                <p>1,223 calories, 65 g protein, 166 g carbohydrates, 30 g fiber, 35 g fat, 1,282 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 23</h3>
            <strong>Breakfast</strong>
                <br>
                <p>1 slice Peanut Butter-Banana Cinnamon Toast</p>

                <strong>A.M. Snack</strong>
                <p>1 kiwi</p>

                <strong>Lunch</strong>
                <p>1/2 cups Slow-Cooker Vegetable Soup with 3 Tbsp. hummus and 6 seeded crackers </p>

                <strong>P.M. Snack</strong>
                <p>1 kiwi</p>

                <strong>Dinner</strong>
                <p>1 serving Taco Spaghetti Squash Boats</p>
                <strong>Benefits</strong>
                <p>1,221 calories, 55 g protein, 129 g carbohydrates, 30 g fiber, 60 g fat, 1,803 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 24</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1 serving Blueberry-Banana Overnight Oats</p>

                <strong>A.M. Snack</strong>
                <p>1 serving Apple Cider Vinegar Tonic</p>

                <strong>Lunch</strong>
                <p>1 1/2 cups Slow-Cooker Vegetable Soup with 1 slice Everything Bagel Avocado Toast </p>

                <strong>P.M. Snack</strong>
                <p>1/2 cup edamame (in pods) sprinkled with a pinch of coarse sea salt</p>

                <strong>Dinner</strong>
                <p>1 serving Vegan Coconut Chickpea Curry</p>
                <strong>Benefits</strong>
                <p>1,225 calories, 41 g protein, 181 g carbohydrates, 36 g fiber, 41 g fat, 1,842 mg sodium</p>
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
                <p>1 serving Avocado-Egg Toast</p>

                <strong>A.M. Snack</strong>
                <p> 1 medium orange</p>

                <strong>Lunch</strong>
                <p>1 serving Butternut Squash Soup with Avocado & Chickpeas</p>

                <strong>P.M. Snack</strong>
                <p>1 medium kiwi</p>

                <strong>Dinner</strong>
                <p>1 serving Citrus Poached Salmon with Asparagus with 3/4 cup Cauliflower Rice</p>
                <strong>Benefits</strong>
                <p>1,228 calories, 58 g protein, 126 g carbohydrates, 30 g fiber, 59 g fat, 1,709 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 26</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1/2 cups Blueberry-Banana Overnight Oats</p>

                <strong>A.M. Snack</strong>
                <p>1 medium orange</p>

                <strong>Lunch</strong>
                <p>1/2 cups Slow-Cooker Vegetable Soup with 1 slice Everything Bagel Avocado Toast  </p>

                <strong>P.M. Snack</strong>
                <p>2 medium kiwis</p>

                <strong>Dinner</strong>
                <p>1 serving Zucchini Noodles with Pesto & Chicken</p>
                <strong>Benefits</strong>
                <p>1,208 calories, 54 g protein, 146 g carbohydrates, 31 g fiber, 52 g fat, 1,715 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 27</h3>
            <strong>Breakfast</strong>
                <br>
                <p>1 slice Peanut Butter-Banana Cinnamon Toast</p>

                <strong>A.M. Snack</strong>
                <p>1 cup Apple Cider Vinegar Tonic with 1 cup blueberries</p>

                <strong>Lunch</strong>
                <p>1 serving Green Salad with Edamame & Beets</p>

                <strong>P.M. Snack</strong>
                <p>1 medium orange</p>

                <strong>Dinner</strong>
                <p>1 serving Spicy Jerk Shrimp with 1/2 cup Easy Brown Rice</p>
                <strong>Benefits</strong>
                <p>1,223 calories, 65 g protein, 166 g carbohydrates, 30 g fiber, 35 g fat, 1,282 mg sodium</p>
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
                <p>1 slice Peanut Butter-Banana Cinnamon Toast</p>

                <strong>A.M. Snack</strong>
                <p>1 cup Apple Cider Vinegar Tonic with 1 cup blueberries</p>

                <strong>Lunch</strong>
                <p>1 serving Green Salad with Edamame & Beets</p>

                <strong>P.M. Snack</strong>
                <p>1 medium orange</p>

                <strong>Dinner</strong>
                <p>1 serving Spicy Jerk Shrimp with 1/2 cup Easy Brown Rice</p>
                <strong>Benefits</strong>
                <p>1,223 calories, 65 g protein, 166 g carbohydrates, 30 g fiber, 35 g fat, 1,282 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
            <h3>Day 29</h3>
            <strong>Breakfast</strong>
                <br>
                <p>1 slice Peanut Butter-Banana Cinnamon Toast</p>

                <strong>A.M. Snack</strong>
                <p>1 kiwi</p>

                <strong>Lunch</strong>
                <p>1/2 cups Slow-Cooker Vegetable Soup with 3 Tbsp. hummus and 6 seeded crackers </p>

                <strong>P.M. Snack</strong>
                <p>1 kiwi</p>

                <strong>Dinner</strong>
                <p>1 serving Taco Spaghetti Squash Boats</p>
                <strong>Benefits</strong>
                <p>1,221 calories, 55 g protein, 129 g carbohydrates, 30 g fiber, 60 g fat, 1,803 mg sodium</p>
                <br>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                <h3>Day 30</h3>
                <strong>Breakfast</strong>
                <br>
                <p>1 serving Blueberry-Banana Overnight Oats</p>

                <strong>A.M. Snack</strong>
                <p>1 serving Apple Cider Vinegar Tonic</p>

                <strong>Lunch</strong>
                <p>1 1/2 cups Slow-Cooker Vegetable Soup with 1 slice Everything Bagel Avocado Toast </p>

                <strong>P.M. Snack</strong>
                <p>1/2 cup edamame (in pods) sprinkled with a pinch of coarse sea salt</p>

                <strong>Dinner</strong>
                <p>1 serving Vegan Coconut Chickpea Curry</p>
                <strong>Benefits</strong>
                <p>1,225 calories, 41 g protein, 181 g carbohydrates, 36 g fiber, 41 g fat, 1,842 mg sodium</p>
                <br>
            </div>
            </div>
        </div>
    </div>
</body>
</html>