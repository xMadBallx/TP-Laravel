
@extends('layouts.app')

    @section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Panier</h1>
        </div>
    </section>

    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"> </th>
                                <th scope="col">Produit</th>
                                <th scope="col">Disponibilité</th>
                                <th scope="col" class="text-center">Quantité</th>
                                <th scope="col" class="text-right">Prix</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                <td>Dada</td>
                                <td>En stock</td>
                                <td><input class="form-control" type="text" value="1" /></td>
                                <td class="text-right">124,90 €</td>
                                <td class="text-right"><button class="btn btn-sm btn-danger"><i
                                            class="fa fa-trash"></i> </button> </td>
                            </tr>
                            <tr>
                                <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                <td>Toto</td>
                                <td>En stock</td>
                                <td><input class="form-control" type="text" value="1" /></td>
                                <td class="text-right">33,90 €</td>
                                <td class="text-right"><button class="btn btn-sm btn-danger"><i
                                            class="fa fa-trash"></i> </button> </td>
                            </tr>
                            <tr>
                                <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                <td>Titi</td>
                                <td>En stock</td>
                                <td><input class="form-control" type="text" value="1" /></td>
                                <td class="text-right">70,00 €</td>
                                <td class="text-right"><button class="btn btn-sm btn-danger"><i
                                            class="fa fa-trash"></i> </button> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Sous-Total</td>
                                <td class="text-right">255,90 €</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Frais de port</td>
                                <td class="text-right">6,90 €</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Total</strong></td>
                                <td class="text-right"><strong>346,90 €</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <button class="btn w-100 btn-light">Continuer vos achats</button>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <button class="btn btn-lg w-100 btn-success text-uppercase">Commander</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
