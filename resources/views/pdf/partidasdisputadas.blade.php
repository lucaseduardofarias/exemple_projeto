<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <title>Partidas Disputadas </title>
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
      <h2>Relatório das partidas</h2>
      <hr>
      <ul>
         <div class="d-flex">
            <div class="mr-auto p-2">
               <h2 class="display-4 titulo">Listar de Jogadores</h2>
            </div>
         </div>
         <div >
            <table >
               <thead>
                  <tr>
                     <th>Jogador</th>
                     <th>Partida</th>
                  </tr>
               </thead>
               <tbody>
                  @php $interador = 1; @endphp
                  @foreach ($jogadores as $jogador)
                    @if($loop->iteration == $interador)
                        <tr style="font-weight:bold">
                            <td  style="font-weight:bold">{{ $jogador->partida->time->nome}} VS {{ $jogador->partida->time2->nome}}</td>
                            <td  style="font-weight:bold">{{ $jogador->partida->time->nome}} VS {{ $jogador->partida->time2->nome}}</td>
                        </tr  style="font-weight:bold">
                        @php $interador += 22; @endphp
                    @endif
                    <tr>
                        <td>{{ $jogador->jogador->nome}}</td>
                        <td>{{ $jogador->jogador->time->nome}}</td>
                    </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </ul>
   </body>
</html>
