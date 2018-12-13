<div class="album py-5 bg-light">
    <div class="container">

        <div class="droplist">
            <input type="text"
                   name="userInput"
                   id="userInput"
                   placeholder="search..."/>
            <div id="droplistContent" class="dropdown-content">
                <ul>
                    <li>
                        <img src="images/Сало.jpg" class="img-circle"/>
                        <a href="#">Сало</a>
                    </li>
                    <li>
                        <img src="images/Цибуля.jpg"
                             class="img-circle"/>
                        <a href="#">Цибуля</a>
                    </li>
                </ul>
            </div>
        </div>

        <h1>Авто сервіс Вкрути Лампочку</h1>

        <div class="row">
            <a href="create.php" class="btn btn-success">Додати</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                <?php
                //                    $res = $connect->query("SELECT Id,Email,Firstname,Lastname FROM tblusers");
                //                    while ($row = $res->fetch_assoc()) {
                //                        echo "
                //                        <tr>
                //                            <td></td>
                //                            <td>" . $row['Lastname'] . " " . $row['Firstname'] . "</td>
                //                            <td>{$row['Email']}</td>
                //                        </tr>
                //                        ";
                //                    }
                ?>
                </tbody>
            </table>
        </div>


    </div>
</div>