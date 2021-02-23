<main class="main">
    <div class="container_main">
        <section class="form">
            <div class="container_form">
                <?php 
                    // Вывод сообщения об успешной отправке заявки как сделать
                    if(isset($_POST['order']) && App\Order::get_order() == true) {
                        echo 'True';
                    }
                    
                ?>

                <h2>Order</h2>
                <hr/>
                <form class="form_order" method="POST">
                    <p>Enter Your name: </p><input type="text" placeholder="Surname Firstname" maxlength="35" name="name"/>
                    <hr/>
                    <p>Enter Your email: </p><input type="email" placeholder="test@gmail.com" maxlength="35" name="email"/>
                    <hr/>
                    <p>Enter Your phone: </p><input type="phone" placeholder="+375(code)*******" maxlength="35" name="phone"/>
                    <hr/>
                    <p>Check Your product: </p>
                        <input class="radio" type="radio" name="product" value="standart"/><strong>Standart</strong><br/>
                        <input class="radio" type="radio" name="product" value="business"/><strong>Business</strong><br/>
                        <input class="radio" type="radio" name="product" value="premium"/><strong>Premium</strong><br/>
                        <input class="radio" type="radio" name="product" value="unlimited"/><strong>Unlimited</strong>
                    <div class="order">
                        <button class="order_btn" name="order">Order</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</main>