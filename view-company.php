<style type="text/css">
    /*
    Max width before this PARTICULAR table gets nasty. This query will take effect for any screen smaller than 760px and also iPads specifically.
    */
table {
  border-collapse: collapse;
  padding: 4px;
  font-family: arial;
}

table, th, td {
  border: 1px solid black;
}
    @media
      only screen 
    and (max-width: 760px), (min-device-width: 768px) 
    and (max-device-width: 1024px)  {

        /* Force table to not be like tables anymore */
        table, thead, tbody, th, td, tr {
            display: block;
        }

        /* Hide table headers (but not display: none;, for accessibility) */
        thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

    tr {
      margin: 0 0 1rem 0;
    }
      
    tr:nth-child(odd) {
      background: #ccc;
    }
    
        td {
            /* Behave  like a "row" */
            border: none;
            border-bottom: 1px solid #eee;
            position: relative;
            padding-left: 50%;
        }

        td:before {
            /* Now like a table header */
            position: absolute;
            /* Top/left values mimic padding */
            top: 0;
            left: 6px;
            width: 45%;
            padding-right: 10px;
            white-space: nowrap;
        }

        /*
        Label the data
    You could also use a data-* attribute and content for this. That way "bloats" the HTML, this way means you need to keep HTML and CSS in sync. Lea Verou has a clever way to handle with text-shadow.
        */
        td:nth-of-type(1):before { content: "N0"; }
        td:nth-of-type(2):before { content: "Company"; }
        td:nth-of-type(3):before { content: "First Name"; }
        td:nth-of-type(4):before { content: "Last Name"; }
         td:nth-of-type(8):before { content: "E-mail"; }
        td:nth-of-type(5):before { content: "Tel"; }
        td:nth-of-type(6):before { content: "Address 1"; }
        td:nth-of-type(7):before { content: "Address 2"; }
       
        td:nth-of-type(9):before { content: "Reg date"; }
        td:nth-of-type(10):before { content: "Campany code"; }
    }
</style>
Responsive tABLE FOR pc AND MOBILE
<table role="table">
  <thead role="rowgroup">
    <tr role="row">
      <th role="columnheader">N0</th>
      <th role="columnheader">Company</th>
      <th role="columnheader">First Name</th>
      <th role="columnheader">Last Name</th>
      
      
      <th role="columnheader">E-mail</th>
      <th role="columnheader">Tel</th>
      <th role="columnheader">Addres 1</th>
      <th role="columnheader">Address 2</th>
      <th role="columnheader">Reg date</th>
      <th role="columnheader">Company code</th>
    </tr>
  </thead>
  <tbody role="rowgroup">
    <tr role="row">
      <td role="cell">1</td>
      <td role="cell">Trusted kigali developers</td>
      <td role="cell">NIYBIZI HIRWA</td>
      <td role="cell">Claude</td>
      <td role="cell">kigalidevelopers@gmail.com</td>
      <td role="cell">+(250) 789207778</td>
      <td role="cell">Kigali , Rwanda</td>
      <td role="cell">Kimironko</td>
      <td role="cell">20/12/2020</td>
      
      <td role="cell">Kio90Qrst</td>
    </tr>
    <tr role="row">
      <td role="cell">2</td>
      <td role="cell">Trusted kigali developers</td>
      <td role="cell">NIYBIZI HIRWA</td>
      <td role="cell">Claude</td>
      <td role="cell">kigalidevelopers@gmail.com</td>
      <td role="cell">+(250) 789207778</td>
      <td role="cell">Kigali , Rwanda</td>
      <td role="cell">Kimironko</td>
      <td role="cell">20/12/2020</td>
      
      <td role="cell">Kio90Qrst</td>
    </tr>
    <tr role="row">
      <td role="cell">3</td>
      <td role="cell">Trusted kigali developers</td>
      <td role="cell">NIYBIZI HIRWA</td>
      <td role="cell">Claude</td>
      <td role="cell">kigalidevelopers@gmail.com</td>
      <td role="cell">+(250) 789207778</td>
      <td role="cell">Kigali , Rwanda</td>
      <td role="cell">Kimironko</td>
      <td role="cell">20/12/2020</td>
      
      <td role="cell">Kio90Qrst</td>
    </tr>
    
  </tbody>
</table>