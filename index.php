<?php include("inc/header.php"); ?>
<?php
        $url = "https://jsonplaceholder.typicode.com/todos/1";
        $data = json_decode(file_get_contents($url), true)
?>


<div class="col-10" id="main">
  <div class="row">

    <div class="col-12 col-md-6 col-lg-3">
      <div class="card-dashboard">
        <h3>Totaal aantal tickets</h3>
        <p class="total-text"><?php echo "id: ", $data['userId']; ?></p>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
      <div class="card-dashboard">
        <h3>Totaal aantal nieuwe tickets</h3>
        <p class="total-text"><?php echo "Title: ", $data['title'];?></p>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
      <div class="card-dashboard">
        <h3>Tickets in afwachting</h3>
        <p class="total-text">3</p>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
      <div class="card-dashboard">
        <h3>Geparkeerde tickets</h3>
        <p class="total-text">10</p>
      </div>
    </div>

    <div class="col-12 col-md-12 col-lg-6">
      <div class="card-dashboard-table">
        <h3>Lopende tickets</h3>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Opdrachtgever</th>
              <th scope="col">Omschrijving</th>
              <th scope="col">Tag</th>
              <th scope="col">Reactie</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>adobe.com</td>
              <td>Problemen met het ontvangen van orders, snel hulp gewenst</td>
              <td>Junior</td>
              <td>24</td>
            </tr>
            <tr>
              <td>adobe.com</td>
              <td>Problemen met het ontvangen van orders, snel hulp gewenst</td>
              <td>Junior</td>
              <td>24</td>
            </tr>
            <tr>
              <td>adobe.com</td>
              <td>Problemen met het ontvangen van orders, snel hulp gewenst</td>
              <td>Junior</td>
              <td>24</td>
            </tr>
            <tr>
              <td>adobe.com</td>
              <td>Problemen met het ontvangen van orders, snel hulp gewenst</td>
              <td>Junior</td>
              <td>24</td>
            </tr>
            <tr>
              <td>adobe.com</td>
              <td>Problemen met het ontvangen van orders, snel hulp gewenst</td>
              <td>Junior</td>
              <td>24</td>
            </tr>
            <tr>
              <td>adobe.com</td>
              <td>Problemen met het ontvangen van orders, snel hulp gewenst</td>
              <td>Junior</td>
              <td>24</td>
            </tr>

          </tbody>
        </table>

      </div>


    </div>

    <div class="col-12 col-md-12 col-lg-6">
      <div class="card-dashboard-table">
        <h3>Updates</h3>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Website</th>
              <th scope="col">MODX</th>
              <th scope="col">PHP</th>
              <th scope="col">UPDATES</th>
              <th scope="col">ALERTS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>adobe.com</td>
              <td>2.4.5-tpl</td>
              <td>7.0.2</td>
              <td>1</td>
              <td>0</td>
            </tr>
            <tr>
              <td>adobe.com</td>
              <td>2.4.5-tpl</td>
              <td>7.0.2</td>
              <td>1</td>
              <td>0</td>
            </tr>
            <tr>
              <td>adobe.com</td>
              <td>2.4.5-tpl</td>
              <td>7.0.2</td>
              <td>1</td>
              <td>0</td>
            </tr>
            <tr>
              <td>adobe.com</td>
              <td>2.4.5-tpl</td>
              <td>7.0.2</td>
              <td>1</td>
              <td>0</td>
            </tr>
            <tr>
              <td>adobe.com</td>
              <td>2.4.5-tpl</td>
              <td>7.0.2</td>
              <td>1</td>
              <td>0</td>
            </tr>
            <tr>
              <td>adobe.com</td>
              <td>2.4.5-tpl</td>
              <td>7.0.2</td>
              <td>1</td>
              <td>0</td>
            </tr>
          </tbody>
        </table>

      </div>


    </div>

    <div class="col-12 col-md-6 col-lg-3">
      <div class="card-dashboard">
        <h3>Reactie tijd week</h3>
        <p class="total-text">30 minuten</p>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
      <div class="card-dashboard">
        <h3>Reactie tijd maand</h3>
        <p class="total-text">44 minuten</p>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
      <div class="card-dashboard">
        <h3>Aantal updates</h3>
        <p class="total-text">100</p>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
      <div class="card-dashboard">
        <h3>Target</h3>
        <p class="total-text">Dashboard text</p>
      </div>
    </div>


<?php include("inc/footer.php"); ?>
