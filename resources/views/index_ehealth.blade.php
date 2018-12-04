@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                            <div class="sidebar-sticky">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="clientes.html">
                                            <span data-feather="file"></span>
                                            Clientes
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="equipamentos.html">
                                            <span data-feather="shopping-cart"></span>
                                            Equipamentos
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="locacao.html">
                                            <span data-feather="users"></span>
                                            Locação
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="relatorios.html">
                                            <span data-feather="bar-chart-2"></span>
                                            Relatórios
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="sobre.html">
                                            <span data-feather="layers"></span>
                                            Sobre
                                        </a>
                                    </li>

                                </ul>

                            </div>
                        </nav>

                        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                <h1 class="h2">eHealth</h1>
                                <div class="btn-toolbar mb-2 mb-md-0">
                                    <div class="btn-group mr-2">
                                        <button class="btn btn-sm btn-outline-secondary">Compartilhar</button>
                                        <button class="btn btn-sm btn-outline-secondary">Exportar</button>
                                    </div>
                                </div>
                            </div>



                            <h2>Modelo</h2>
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Header</th>
                                        <th>Header</th>
                                        <th>Header</th>
                                        <th>Header</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1,001</td>
                                        <td>Lorem</td>
                                        <td>ipsum</td>
                                        <td>dolor</td>
                                        <td>sit</td>
                                    </tr>
                                    <tr>
                                        <td>1,002</td>
                                        <td>amet</td>
                                        <td>consectetur</td>
                                        <td>adipiscing</td>
                                        <td>elit</td>
                                    </tr>
                                    <tr>
                                        <td>1,003</td>
                                        <td>Integer</td>
                                        <td>nec</td>
                                        <td>odio</td>
                                        <td>Praesent</td>
                                    </tr>
                                    <tr>
                                        <td>1,003</td>
                                        <td>libero</td>
                                        <td>Sed</td>
                                        <td>cursus</td>
                                        <td>ante</td>
                                    </tr>
                                    <tr>
                                        <td>1,004</td>
                                        <td>dapibus</td>
                                        <td>diam</td>
                                        <td>Sed</td>
                                        <td>nisi</td>
                                    </tr>
                                    <tr>
                                        <td>1,005</td>
                                        <td>Nulla</td>
                                        <td>quis</td>
                                        <td>sem</td>
                                        <td>at</td>
                                    </tr>
                                    <tr>
                                        <td>1,006</td>
                                        <td>nibh</td>
                                        <td>elementum</td>
                                        <td>imperdiet</td>
                                        <td>Duis</td>
                                    </tr>
                                    <tr>
                                        <td>1,007</td>
                                        <td>sagittis</td>
                                        <td>ipsum</td>
                                        <td>Praesent</td>
                                        <td>mauris</td>
                                    </tr>
                                    <tr>
                                        <td>1,008</td>
                                        <td>Fusce</td>
                                        <td>nec</td>
                                        <td>tellus</td>
                                        <td>sed</td>
                                    </tr>
                                    <tr>
                                        <td>1,009</td>
                                        <td>augue</td>
                                        <td>semper</td>
                                        <td>porta</td>
                                        <td>Mauris</td>
                                    </tr>
                                    <tr>
                                        <td>1,010</td>
                                        <td>massa</td>
                                        <td>Vestibulum</td>
                                        <td>lacinia</td>
                                        <td>arcu</td>
                                    </tr>
                                    <tr>
                                        <td>1,011</td>
                                        <td>eget</td>
                                        <td>nulla</td>
                                        <td>Class</td>
                                        <td>aptent</td>
                                    </tr>
                                    <tr>
                                        <td>1,012</td>
                                        <td>taciti</td>
                                        <td>sociosqu</td>
                                        <td>ad</td>
                                        <td>litora</td>
                                    </tr>
                                    <tr>
                                        <td>1,013</td>
                                        <td>torquent</td>
                                        <td>per</td>
                                        <td>conubia</td>
                                        <td>nostra</td>
                                    </tr>
                                    <tr>
                                        <td>1,014</td>
                                        <td>per</td>
                                        <td>inceptos</td>
                                        <td>himenaeos</td>
                                        <td>Curabitur</td>
                                    </tr>
                                    <tr>
                                        <td>1,015</td>
                                        <td>sodales</td>
                                        <td>ligula</td>
                                        <td>in</td>
                                        <td>libero</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </main>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
