<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/papercss@1.6.1/dist/paper.min.css">
    <style>
      body {
        background-image: url("geometry2.png")
      }
      .invisible {
        display: none;
      }
      .bold {
        font-weight: 400;
      }
      .flex {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }
      .card-width {
        width: 60%;
      }

      #alert {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
      }

      @media screen and (max-width: 500px) {
        .card-width {
          width: 98%;
        }
      }
    </style>
  </head>
  <body>
    <div class="row flex-center">
    <div class="col flex">
    <div class="card card-width" style="background-color: white;">
      <div class="card-body">
        <h1 class="card-title">Rehberim</h4>
        <h5 class="card-subtitle">Nice looking guest list</h5>
        <p class="card-text">Notice that the card width in this example have been set to 20rem, otherwise it will try to fill the current container/row where the card is.</p>
        <form>
          <fieldset class="form-group">
            <h4>Kişi Ekle</h4>
            <label for="orgName">Name*</label>
            <input id="name" type="text" class="form-control" id="orgName">
            <label class="margin-top-small" for="orgPhone">Phone*</label>
            <input id="phone" type="tel" class="form-control" id="orgPhone">
          </fieldset>
          <button id="addBtn" type="button" class="btn-secondary">Add Guest</button>
          <button id="contactBtn" type="button" class="btn-success margin-top-small">
            Telefondan çek.
          </button>
        </form>
        <h2>Guests</h2>
        <p id="empty">Sorry, but your list is empty :(</p>
        <table id="table" class="border border-primary invisible">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Tel</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
        <button id="addBtn" type="button" class="btn-secondary">Aktar</button>
      </div>
    </div>
    <h5>powered by <a href="https://www.getpapercss.com/" target="_blank">PaperCSS</a></h5>
    </div>
  </div>
  <div id="alert" class="alert alert-danger invisible">Alert-danger</div>

  <script src="index.js"></script>
  </body>
</html>
