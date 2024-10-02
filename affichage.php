<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Styled Table</title>
  <style>
    .image {
      width: 250px;
      float: left;
      margin: 20px;
    }
    body {
      font-size: small;
      line-height: 1.4;
    }
    p {
      margin: 0;
    }
    .container {
      width: 600px;
      margin: 60px auto;
      padding: 19px 0.5rem;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border : 1px solid black;
      transform: scale(1.33);
    }
    .responsive-table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }
    .responsive-table th,
    .responsive-table td {
      font-weight: normal;
      text-align: left;
      padding: 0.25rem 0;
      border-top: 1px solid black;
      white-space: nowrap;
    }
    .responsive-table .blank-cell {
      width: 1rem;
      border-top: 0;
    }
    .responsive-table .thick-row th,
    .responsive-table .thick-row td {
      border-top-width: 5px;
    }
    .small-info {
      font-size: 0.7rem;
    }
    .responsive-table--small {
      border-bottom: 1px solid #999;
      margin: 0 0 0.5rem 0;
    }
    .responsive-table--small th,
    .responsive-table--small td {
      border: 0;
      padding: 0;
    }
    .responsive-table--grid td::before {
      content: "•";
      font-weight: bold;
      margin: 0 0.25rem 0 0;
    }
    .text-center {
      text-align: center;
    }
    .thick-end {
      border-bottom: 10px solid black;
    }
    .thin-end {
      border-bottom: 1px solid black;
    }

    /* button */

    
/* boutton export */

/* CSS */
.btn {
  --b: 2px;   /* border thickness */
  --s: .45em; /* size of the corner */
  --color: #373B44;
  
  padding: calc(.5em + var(--s)) calc(.9em + var(--s));
  color: var(--color);
  --_p: var(--s);
  background:
    conic-gradient(from 90deg at var(--b) var(--b),#0000 90deg,var(--color) 0)
    var(--_p) var(--_p)/calc(100% - var(--b) - 2*var(--_p)) calc(100% - var(--b) - 2*var(--_p));
  transition: .3s linear, color 0s, background-color 0s;
  outline: var(--b) solid #0000;
  outline-offset: .6em;
  font-size: 16px;

  border: 0;

  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;

  transform: scale(0.85);
  margin: 0px auto;
}

.btn:hover,
.btn:focus-visible{
  --_p: 0px;
  outline-color: var(--color);
  outline-offset: .05em;
}

.btn:active {
  background: var(--color);
  color: #fff;
}



  </style>
</head>
<body>
  <div class="container">
    <table class="responsive-table">
      <caption class="performance-facts__title">Confirmez les données</caption>
      <thead class="performance-facts__header">
        <tr>
          <th scope="col">Nom</th>
          <th scope="col">Adresse</th>
          <th scope="col">Contact</th>
          <th scope="col">Nombre d'employés</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <td colspan="4" class="thick-end">Total :</td>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <th scope="row">The Lion King (2019 remake)</th>
          <td data-title="Adresse">2019</td>
          <td data-title="Contact">Disney</td>
          <td data-title="Nombre d'employés" data-type="currency">$1,657,870,986</td>
        </tr>
        <tr>
          <th scope="row">The Lion King (2019 remake)</th>
          <td data-title="Adresse">2019</td>
          <td data-title="Contact">Disney</td>
          <td data-title="Nombre d'employés" data-type="currency">$1,657,870,986</td>
        </tr>
        <tr>
          <th scope="row">The Lion King (2019 remake)</th>
          <td data-title="Adresse">2019</td>
          <td data-title="Contact">Disney</td>
          <td data-title="Nombre d'employés" data-type="currency">$1,657,870,986</td>
        </tr>
      </tbody>
    </table>

    <button class="btn" type="submit">Confirmer</button>

  </div>
</body>
</html>
