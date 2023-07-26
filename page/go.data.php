<?php require_once 'components/head.php'; ?>
<div class="col">
    <div class="p-5 shadow bg-white">
       <h1>General Order</h1>
       <div class="container">
           <div class="row">
            <div class="col col-12 py-2">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info" type="submit">Search</button>
                </form>
            </div>
            <div class="col col-12">
                            <table class="table table-sm table-bordered table-condense">
                        <thead>
                        <tr>
                            <th scope="col">R#</th>
                            <th scope="col">Publication</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Effectivity</th>
                            <th scope="col">Authority</th>
                            <th scope="col">Date</th>
                            <th scope="col">Level</th>
                            <th scope="col">Remarks</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Activation</td>
                            <td>Headquarters and Headquarters Service Company of TRADOC and ARMOR Div</td>
                            <td>29-Apr-22</td>
                            <td>HPA GO 465</td>
                            <td>02-May-22</td>
                            <td>Comapany</td>
                            <td>N/A</td>
                            <td>
                                <a href="">Edit</a> |
                                <a href="">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                                <td>Deactivation</td>
                                <td>Headquarters Service Battalion of TRADOC and Armor Div</td>
                                <td>29-Apr-22</td>
                                <td>HPA GO 465</td>
                                <td>02-May-22</td>
                                <td>Battalion</td>
                                <td>N/A</td>
                                <td>
                                    <a href="">Edit</a> |
                                    <a href="">Delete</a>
                                </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                                <td>Reassignment</td>
                                <td>Reassignment of Security Escort Battalion (SEB) fm IMCOM to HHSG, PA</td>
                                <td>27-Mar-23</td>
                                <td>HPA GO Nr 475</td>
                                <td>28-Mar-23</td>
                                <td>Battalion</td>
                                <td>N/A</td>
                                <td>
                                    <a href="">Edit</a> |
                                    <a href="">Delete</a>
                                </td>
                        </tr>
                        </tbody>
                        </table>
            </div>
           </div>
       </div>
    </div>      
</div>

<?php
require_once 'components/foot.php';

/* EoF */