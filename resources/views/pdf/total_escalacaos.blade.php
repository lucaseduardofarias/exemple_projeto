<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <title>Total de escalações</title>
      <style>
         table {
         font-family: arial, sans-serif;
         border-collapse: collapse;
         width: 100%;
         }
         td, th {
         border: 1px solid #dddddd;
         text-align: left;
         padding: 8px;
         }
         .motic {
         float: right;
         }
         .pmsl {
         float: left;
         }
         .page-break {
         page-break-after: always;
         }
         .header {
         width: 100%;
         height: 320px;
         padding-bottom: 20px;
         }
      </style>
   </head>
   <body>
      <h2>Relatório Total de Escalações</h2>
      <hr>
      <ul>
         <div class="d-flex">
            <div class="mr-auto p-2">
               <h2 class="display-4 titulo">Informações</h2>
            </div>
         </div>
         <div >
            <table >
               <thead>
                  <tr>
                     <th>Jogador</th>
                     <th>Escalações</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>{{ $escalacao->nome}}</td>
                     <td>{{ $escalacao->escalaoPartidas->count() }}</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </ul>
   </body>
</html>
