<?php include_once('app/templates/header.php'); ?>

    <div class="profile-speler">

        <div class="container">
            <div class="profile-titel">
                <h2>{{ Naam }}</h2> <h4>{{ Titel }}</h4>
            </div>
        </div>


        <div class="profile-info">
            <div class="contaier">
                <div class="row">

                    <div class="col-4"><p>43 <br> Anytimers</p></div>
                    <div class="col-4"><p>34 <br> Foto's</p></div>
                    <div class="col-4"><p>43 <br> Verhalen</p></div>

                </div>
            </div>
        </div>

    </div>

    <div class="anytimers">

        <div class="anytimers-titel">
            <h3>AnyTimers {{ Naam }}</h3>
        </div>

        <div class="anytimers-score">

            <div class="container">

                <table class="table anytimer-table">
                    <thead>
                    <tr>
                        <th scope="col">Personen</th>
                        <th scope="col">Krijgen</th>
                        <th scope="col">Geven</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Willem</td>
                        <td>2</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Nick</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Dennis</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Nan</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Bas</td>
                        <td>2</td>
                        <td>0</td>
                    </tr>
                    </tbody>
                </table>

            </div>

        </div>

    </div>


    <div class="profile-pictures">

        <h3>Laatst geposte foto's</h3>

        <div class="recent-foto">
            <div class="container">
                <div class="row">
                    <div class="col-6"><img class="img-responsive" src="app/img/foto.jpeg"></div>
                    <div class="col-6"><img class="img-responsive" src="app/img/foto.jpeg"></div>
                    <div class="col-6"><img class="img-responsive" src="app/img/foto.jpeg"></div>
                    <div class="col-6"><img class="img-responsive" src="app/img/foto.jpeg"></div>
                </div>
            </div>
        </div>

    </div>










<?php include_once ('app/templates/footer.php');