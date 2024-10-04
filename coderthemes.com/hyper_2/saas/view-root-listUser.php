<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/hyper_2/saas/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Oct 2024 17:04:15 GMT -->

<head>
    <meta charset="utf-8" />
    <title>List User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="assets/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        <?php
        include ("navbar.php");
        ?>
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php
        include ("leftSidebar.php");
        ?>
        <!-- ========== Left Sidebar End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active">Lista de usuarios</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Lista de usuarios</h4>
                            </div>


                          


                            <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Scroll - Vertical</h4>
                                    <p class="text-muted font-14">
                                        This example shows the DataTables table body scrolling in the vertical direction. This can generally be seen as an
                                        alternative method to pagination for displaying a large table in a fairly small vertical area, and as such
                                        pagination has been disabled here (note that this is not mandatory, it will work just fine with pagination enabled
                                        as well!).
                                    </p>

                                    <ul class="nav nav-tabs nav-bordered mb-3" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a href="#scroll-vertical-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active" aria-selected="true" role="tab">
                                                Preview
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a href="#scroll-vertical-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                                Code
                                            </a>
                                        </li>
                                    </ul> <!-- end nav-->
                                    <div class="tab-content">
                                        <div class="tab-pane active show" id="scroll-vertical-preview" role="tabpanel">
                                            <div id="scroll-vertical-datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"><div id="scroll-vertical-datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="scroll-vertical-datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 786px; padding-right: 17px;"><table class="table table-striped dt-responsive nowrap w-100 dataTable no-footer" style="margin-left: 0px; width: 786px;"><thead>
                                                    <tr><th class="sorting" tabindex="0" aria-controls="scroll-vertical-datatable" rowspan="1" colspan="1" style="width: 145.988px;" aria-label="Name: activate to sort column ascending">Name</th><th class="sorting sorting_asc" tabindex="0" aria-controls="scroll-vertical-datatable" rowspan="1" colspan="1" style="width: 199.137px;" aria-label="Position: activate to sort column descending" aria-sort="ascending">Position</th><th class="sorting" tabindex="0" aria-controls="scroll-vertical-datatable" rowspan="1" colspan="1" style="width: 92.2px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="scroll-vertical-datatable" rowspan="1" colspan="1" style="width: 38.4125px;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="scroll-vertical-datatable" rowspan="1" colspan="1" style="width: 84.2625px;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="scroll-vertical-datatable" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
                                                </thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; max-height: 350px; width: 100%;"><table id="scroll-vertical-datatable" class="table table-striped dt-responsive nowrap w-100 dataTable no-footer dtr-inline collapsed" aria-describedby="scroll-vertical-datatable_info" style="width: 100%;"><thead>
                                                    <tr style="height: 0px;"><th class="sorting sorting_asc" aria-controls="scroll-vertical-datatable" rowspan="1" colspan="1" style="width: 145.988px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Name: activate to sort column descending" aria-sort="ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Name</div></th><th class="sorting" aria-controls="scroll-vertical-datatable" rowspan="1" colspan="1" style="width: 199.137px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Position: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Position</div></th><th class="sorting" aria-controls="scroll-vertical-datatable" rowspan="1" colspan="1" style="width: 92.2px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Office: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Office</div></th><th class="sorting" aria-controls="scroll-vertical-datatable" rowspan="1" colspan="1" style="width: 38.4125px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Age: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Age</div></th><th class="sorting" aria-controls="scroll-vertical-datatable" rowspan="1" colspan="1" style="width: 84.2625px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Start date: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Start date</div></th><th class="sorting" aria-controls="scroll-vertical-datatable" rowspan="1" colspan="1" style="width: 0px; display: none; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Salary: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Salary</div></th></tr>
                                                </thead>
                                                


                                                <tbody>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                <tr class="odd">
                                                        <td class="dtr-control" tabindex="0" style="">Airi Satou</td>
                                                        <td class="sorting_1">Accountant</td>
                                                        <td class="">Tokyo</td>
                                                        <td class="">33</td>
                                                        <td class="">2008/11/28</td>
                                                        <td style="display: none;">$162,700</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Garrett Winters</td>
                                                        <td class="sorting_1">Accountant</td>
                                                        <td class="">Tokyo</td>
                                                        <td class="">63</td>
                                                        <td class="">2011/07/25</td>
                                                        <td style="display: none;">$170,750</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Angelica Ramos</td>
                                                        <td class="sorting_1">Chief Executive Officer (CEO)</td>
                                                        <td class="">London</td>
                                                        <td class="">47</td>
                                                        <td class="">2009/10/09</td>
                                                        <td style="display: none;">$1,200,000</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Paul Byrd</td>
                                                        <td class="sorting_1">Chief Financial Officer (CFO)</td>
                                                        <td class="">New York</td>
                                                        <td class="">64</td>
                                                        <td class="">2010/06/09</td>
                                                        <td style="display: none;">$725,000</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Yuri Berry</td>
                                                        <td class="sorting_1">Chief Marketing Officer (CMO)</td>
                                                        <td class="">New York</td>
                                                        <td class="">40</td>
                                                        <td class="">2009/06/25</td>
                                                        <td style="display: none;">$675,000</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Fiona Green</td>
                                                        <td class="sorting_1">Chief Operating Officer (COO)</td>
                                                        <td class="">San Francisco</td>
                                                        <td class="">48</td>
                                                        <td class="">2010/03/11</td>
                                                        <td style="display: none;">$850,000</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Donna Snider</td>
                                                        <td class="sorting_1">Customer Support</td>
                                                        <td class="">New York</td>
                                                        <td class="">27</td>
                                                        <td class="">2011/01/25</td>
                                                        <td style="display: none;">$112,000</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Serge Baldwin</td>
                                                        <td class="sorting_1">Data Coordinator</td>
                                                        <td class="">Singapore</td>
                                                        <td class="">64</td>
                                                        <td class="">2012/04/09</td>
                                                        <td style="display: none;">$138,575</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Gavin Joyce</td>
                                                        <td class="sorting_1">Developer</td>
                                                        <td class="">Edinburgh</td>
                                                        <td class="">42</td>
                                                        <td class="">2010/12/22</td>
                                                        <td style="display: none;">$92,575</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Jonas Alexander</td>
                                                        <td class="sorting_1">Developer</td>
                                                        <td class="">San Francisco</td>
                                                        <td class="">30</td>
                                                        <td class="">2010/07/14</td>
                                                        <td style="display: none;">$86,500</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Suki Burks</td>
                                                        <td class="sorting_1">Developer</td>
                                                        <td class="">London</td>
                                                        <td class="">53</td>
                                                        <td class="">2009/10/22</td>
                                                        <td style="display: none;">$114,500</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Thor Walton</td>
                                                        <td class="sorting_1">Developer</td>
                                                        <td class="">New York</td>
                                                        <td class="">61</td>
                                                        <td class="">2013/08/11</td>
                                                        <td style="display: none;">$98,540</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Jenette Caldwell</td>
                                                        <td class="sorting_1">Development Lead</td>
                                                        <td class="">New York</td>
                                                        <td class="">30</td>
                                                        <td class="">2011/09/03</td>
                                                        <td style="display: none;">$345,000</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Jackson Bradshaw</td>
                                                        <td class="sorting_1">Director</td>
                                                        <td class="">New York</td>
                                                        <td class="">65</td>
                                                        <td class="">2008/09/26</td>
                                                        <td style="display: none;">$645,750</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Vivian Harrell</td>
                                                        <td class="sorting_1">Financial Controller</td>
                                                        <td class="">San Francisco</td>
                                                        <td class="">62</td>
                                                        <td class="">2009/02/14</td>
                                                        <td style="display: none;">$452,500</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Brielle Williamson</td>
                                                        <td class="sorting_1">Integration Specialist</td>
                                                        <td class="">New York</td>
                                                        <td class="">61</td>
                                                        <td class="">2012/12/02</td>
                                                        <td style="display: none;">$372,000</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Michelle House</td>
                                                        <td class="sorting_1">Integration Specialist</td>
                                                        <td class="">Sidney</td>
                                                        <td class="">37</td>
                                                        <td class="">2011/06/02</td>
                                                        <td style="display: none;">$95,400</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Rhona Davidson</td>
                                                        <td class="sorting_1">Integration Specialist</td>
                                                        <td class="">Tokyo</td>
                                                        <td class="">55</td>
                                                        <td class="">2010/10/14</td>
                                                        <td style="display: none;">$327,900</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Colleen Hurst</td>
                                                        <td class="sorting_1">Javascript Developer</td>
                                                        <td class="">San Francisco</td>
                                                        <td class="">39</td>
                                                        <td class="">2009/09/15</td>
                                                        <td style="display: none;">$205,500</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Michael Bruce</td>
                                                        <td class="sorting_1">Javascript Developer</td>
                                                        <td class="">Singapore</td>
                                                        <td class="">29</td>
                                                        <td class="">2011/06/27</td>
                                                        <td style="display: none;">$183,000</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Jennifer Acosta</td>
                                                        <td class="sorting_1">Junior Javascript Developer</td>
                                                        <td class="">Edinburgh</td>
                                                        <td class="">43</td>
                                                        <td class="">2013/02/01</td>
                                                        <td style="display: none;">$75,650</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Ashton Cox</td>
                                                        <td class="sorting_1">Junior Technical Author</td>
                                                        <td class="">San Francisco</td>
                                                        <td class="">66</td>
                                                        <td class="">2009/01/12</td>
                                                        <td style="display: none;">$86,000</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Michael Silva</td>
                                                        <td class="sorting_1">Marketing Designer</td>
                                                        <td class="">London</td>
                                                        <td class="">66</td>
                                                        <td class="">2012/11/27</td>
                                                        <td style="display: none;">$198,500</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Unity Butler</td>
                                                        <td class="sorting_1">Marketing Designer</td>
                                                        <td class="">San Francisco</td>
                                                        <td class="">47</td>
                                                        <td class="">2009/12/09</td>
                                                        <td style="display: none;">$85,675</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Howard Hatfield</td>
                                                        <td class="sorting_1">Office Manager</td>
                                                        <td class="">San Francisco</td>
                                                        <td class="">51</td>
                                                        <td class="">2008/12/16</td>
                                                        <td style="display: none;">$164,500</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Jena Gaines</td>
                                                        <td class="sorting_1">Office Manager</td>
                                                        <td class="">London</td>
                                                        <td class="">30</td>
                                                        <td class="">2008/12/19</td>
                                                        <td style="display: none;">$90,560</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Timothy Mooney</td>
                                                        <td class="sorting_1">Office Manager</td>
                                                        <td class="">London</td>
                                                        <td class="">37</td>
                                                        <td class="">2008/12/11</td>
                                                        <td style="display: none;">$136,200</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Dai Rios</td>
                                                        <td class="sorting_1">Personnel Lead</td>
                                                        <td class="">Edinburgh</td>
                                                        <td class="">35</td>
                                                        <td class="">2012/09/26</td>
                                                        <td style="display: none;">$217,500</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Martena Mccray</td>
                                                        <td class="sorting_1">Post-Sales support</td>
                                                        <td class="">Edinburgh</td>
                                                        <td class="">46</td>
                                                        <td class="">2011/03/09</td>
                                                        <td style="display: none;">$324,050</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Caesar Vance</td>
                                                        <td class="sorting_1">Pre-Sales Support</td>
                                                        <td class="">New York</td>
                                                        <td class="">21</td>
                                                        <td class="">2011/12/12</td>
                                                        <td style="display: none;">$106,450</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Charde Marshall</td>
                                                        <td class="sorting_1">Regional Director</td>
                                                        <td class="">San Francisco</td>
                                                        <td class="">36</td>
                                                        <td class="">2008/10/16</td>
                                                        <td style="display: none;">$470,600</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Hermione Butler</td>
                                                        <td class="sorting_1">Regional Director</td>
                                                        <td class="">London</td>
                                                        <td class="">47</td>
                                                        <td class="">2011/03/21</td>
                                                        <td style="display: none;">$356,250</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Jennifer Chang</td>
                                                        <td class="sorting_1">Regional Director</td>
                                                        <td class="">Singapore</td>
                                                        <td class="">28</td>
                                                        <td class="">2010/11/14</td>
                                                        <td style="display: none;">$357,650</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Shad Decker</td>
                                                        <td class="sorting_1">Regional Director</td>
                                                        <td class="">Edinburgh</td>
                                                        <td class="">51</td>
                                                        <td class="">2008/11/13</td>
                                                        <td style="display: none;">$183,000</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Tatyana Fitzpatrick</td>
                                                        <td class="sorting_1">Regional Director</td>
                                                        <td class="">London</td>
                                                        <td class="">19</td>
                                                        <td class="">2010/03/17</td>
                                                        <td style="display: none;">$385,750</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Shou Itou</td>
                                                        <td class="sorting_1">Regional Marketing</td>
                                                        <td class="">Tokyo</td>
                                                        <td class="">20</td>
                                                        <td class="">2011/08/14</td>
                                                        <td style="display: none;">$163,000</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Cara Stevens</td>
                                                        <td class="sorting_1">Sales Assistant</td>
                                                        <td class="">New York</td>
                                                        <td class="">46</td>
                                                        <td class="">2011/12/06</td>
                                                        <td style="display: none;">$145,600</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Doris Wilder</td>
                                                        <td class="sorting_1">Sales Assistant</td>
                                                        <td class="">Sidney</td>
                                                        <td class="">23</td>
                                                        <td class="">2010/09/20</td>
                                                        <td style="display: none;">$85,600</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Herrod Chandler</td>
                                                        <td class="sorting_1">Sales Assistant</td>
                                                        <td class="">San Francisco</td>
                                                        <td class="">59</td>
                                                        <td class="">2012/08/06</td>
                                                        <td style="display: none;">$137,500</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Hope Fuentes</td>
                                                        <td class="sorting_1">Secretary</td>
                                                        <td class="">San Francisco</td>
                                                        <td class="">41</td>
                                                        <td class="">2010/02/12</td>
                                                        <td style="display: none;">$109,850</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Cedric Kelly</td>
                                                        <td class="sorting_1">Senior Javascript Developer</td>
                                                        <td class="">Edinburgh</td>
                                                        <td class="">22</td>
                                                        <td class="">2012/03/29</td>
                                                        <td style="display: none;">$433,060</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Haley Kennedy</td>
                                                        <td class="sorting_1">Senior Marketing Designer</td>
                                                        <td class="">London</td>
                                                        <td class="">43</td>
                                                        <td class="">2012/12/18</td>
                                                        <td style="display: none;">$313,500</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Bradley Greer</td>
                                                        <td class="sorting_1">Software Engineer</td>
                                                        <td class="">London</td>
                                                        <td class="">41</td>
                                                        <td class="">2012/10/13</td>
                                                        <td style="display: none;">$132,000</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Brenden Wagner</td>
                                                        <td class="sorting_1">Software Engineer</td>
                                                        <td class="">San Francisco</td>
                                                        <td class="">28</td>
                                                        <td class="">2011/06/07</td>
                                                        <td style="display: none;">$206,850</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Bruno Nash</td>
                                                        <td class="sorting_1">Software Engineer</td>
                                                        <td class="">London</td>
                                                        <td class="">38</td>
                                                        <td class="">2011/05/03</td>
                                                        <td style="display: none;">$163,500</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Sonya Frost</td>
                                                        <td class="sorting_1">Software Engineer</td>
                                                        <td class="">Edinburgh</td>
                                                        <td class="">23</td>
                                                        <td class="">2008/12/13</td>
                                                        <td style="display: none;">$103,600</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Zenaida Frank</td>
                                                        <td class="sorting_1">Software Engineer</td>
                                                        <td class="">New York</td>
                                                        <td class="">63</td>
                                                        <td class="">2010/01/04</td>
                                                        <td style="display: none;">$125,250</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Zorita Serrano</td>
                                                        <td class="sorting_1">Software Engineer</td>
                                                        <td class="">San Francisco</td>
                                                        <td class="">56</td>
                                                        <td class="">2012/06/01</td>
                                                        <td style="display: none;">$115,000</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Finn Camacho</td>
                                                        <td class="sorting_1">Support Engineer</td>
                                                        <td class="">San Francisco</td>
                                                        <td class="">47</td>
                                                        <td class="">2009/07/07</td>
                                                        <td style="display: none;">$87,500</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Olivia Liang</td>
                                                        <td class="sorting_1">Support Engineer</td>
                                                        <td class="">Singapore</td>
                                                        <td class="">64</td>
                                                        <td class="">2011/02/03</td>
                                                        <td style="display: none;">$234,500</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Sakura Yamamoto</td>
                                                        <td class="sorting_1">Support Engineer</td>
                                                        <td class="">Tokyo</td>
                                                        <td class="">37</td>
                                                        <td class="">2009/08/19</td>
                                                        <td style="display: none;">$139,575</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Quinn Flynn</td>
                                                        <td class="sorting_1">Support Lead</td>
                                                        <td class="">Edinburgh</td>
                                                        <td class="">22</td>
                                                        <td class="">2013/03/03</td>
                                                        <td style="display: none;">$342,000</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Tiger Nixon</td>
                                                        <td class="sorting_1">System Architect</td>
                                                        <td class="">Edinburgh</td>
                                                        <td class="">61</td>
                                                        <td class="">2011/04/25</td>
                                                        <td style="display: none;">$320,800</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Gloria Little</td>
                                                        <td class="sorting_1">Systems Administrator</td>
                                                        <td class="">New York</td>
                                                        <td class="">59</td>
                                                        <td class="">2009/04/10</td>
                                                        <td style="display: none;">$237,500</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Lael Greer</td>
                                                        <td class="sorting_1">Systems Administrator</td>
                                                        <td class="">London</td>
                                                        <td class="">21</td>
                                                        <td class="">2009/02/27</td>
                                                        <td style="display: none;">$103,500</td>
                                                    </tr><tr class="even">
                                                        <td class="dtr-control" tabindex="0">Gavin Cortez</td>
                                                        <td class="sorting_1">Team Leader</td>
                                                        <td class="">San Francisco</td>
                                                        <td class="">22</td>
                                                        <td class="">2008/10/26</td>
                                                        <td style="display: none;">$235,500</td>
                                                    </tr><tr class="odd">
                                                        <td class="dtr-control" tabindex="0">Prescott Bartlett</td>
                                                        <td class="sorting_1">Technical Author</td>
                                                        <td class="">London</td>
                                                        <td class="">27</td>
                                                        <td class="">2011/05/07</td>
                                                        <td style="display: none;">$145,000</td>
                                                    </tr></tbody>
                                            </table></div></div></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="scroll-vertical-datatable_info" role="status" aria-live="polite">Showing 1 to 57 of 57 entries</div></div><div class="col-sm-12 col-md-7"></div></div></div>
                                        </div> <!-- end preview-->

                                        <div class="tab-pane code" id="scroll-vertical-code" role="tabpanel">
                                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                            <pre class="mb-0">                                                    <span class="html escape hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"scroll-vertical-datatable"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"table dt-responsive nowrap w-100"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Name<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Position<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Office<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Age<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Start date<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Salary<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">thead</span>&gt;</span><br><br><br>    <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Tiger Nixon<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>System Architect<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Edinburgh<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>61<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>2011/04/25<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>$320,800<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Garrett Winters<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Accountant<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Tokyo<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>63<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>2011/07/25<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>$170,750<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span></span>
                                                </pre> <!-- end highlight-->
                                        </div> <!-- end preview code-->
                                    </div> <!-- end tab-content-->

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>





                        </div>
                    </div>
                    <!-- end page title -->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <?php
        include ("footer.php");
        ?>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
            <h5 class="text-white m-0">Theme Settings</h5>
            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>

        <div class="offcanvas-body p-0">
            <div data-simplebar class="h-100">
                <div class="card mb-0 p-3">
                    <h5 class="mt-0 font-16 fw-bold mb-3">Choose Layout</h5>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout01" name="data-layout" type="radio" value="vertical"
                                    class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                                    <span class="d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 border-end flex-column p-1 px-2">
                                                <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Vertical</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal"
                                    class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
                                    <span class="d-flex h-100 flex-column">
                                        <span
                                            class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                            <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                        </span>
                                        <span class="bg-light d-block p-1"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Horizontal</h5>
                        </div>
                    </div>

                    <h5 class="my-3 font-16 fw-bold">Color Scheme</h5>

                    <div class="colorscheme-cardradio">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-bs-theme"
                                        id="layout-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="layout-color-light">
                                        <div id="sidebar-size">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 border-end flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column bg-white rounded-2">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>

                                        <div id="topnav-color" class="bg-white rounded-2 h-100">
                                            <span class="d-flex h-100 flex-column">
                                                <span
                                                    class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                    <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                </span>
                                                <span class="d-flex h-100 flex-column bg-white rounded-2">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-bs-theme"
                                        id="layout-color-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100 bg-black"
                                        for="layout-color-dark">
                                        <div id="sidebar-size">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary border-opacity-25 border-3 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary border-opacity-25 border-3 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary border-opacity-25 border-3 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary border-opacity-25 border-3 rounded w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>

                                        <div id="topnav-color">
                                            <span class="d-flex h-100 flex-column">
                                                <span
                                                    class="bg-light-lighten d-flex p-1 align-items-center border-bottom border-opacity-25 border-primary border-opacity-25">
                                                    <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                    <span
                                                        class="d-block border border-primary border-opacity-25 border-3 rounded ms-auto"></span>
                                                    <span
                                                        class="d-block border border-primary border-opacity-25 border-3 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-primary border-opacity-25 border-3 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-primary border-opacity-25 border-3 rounded ms-1"></span>
                                                </span>
                                                <span class="bg-light-lighten d-block p-1"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-width">
                        <h5 class="my-3 font-16 fw-bold">Layout Mode</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-mode"
                                        id="layout-mode-fluid" value="fluid">
                                    <label class="form-check-label p-0 avatar-md w-100" for="layout-mode-fluid">
                                        <div id="sidebar-size">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 border-end flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column rounded-2">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>

                                        <div id="topnav-color">
                                            <span class="d-flex h-100 flex-column">
                                                <span
                                                    class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                    <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                </span>
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Fluid</h5>
                            </div>
                            <div class="col-4" id="layout-boxed">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-mode"
                                        id="layout-mode-boxed" value="boxed">
                                    <label class="form-check-label p-0 avatar-md w-100 px-2" for="layout-mode-boxed">
                                        <div id="sidebar-size" class="border-start border-end">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 border-end flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column rounded-2">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>

                                        <div id="topnav-color" class="border-start border-end h-100">
                                            <span class="d-flex h-100 flex-column">
                                                <span
                                                    class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                    <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                </span>
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Boxed</h5>
                            </div>

                            <div class="col-4" id="layout-detached">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-mode"
                                        id="data-layout-detached" value="detached">
                                    <label class="form-check-label p-0 avatar-md w-100" for="data-layout-detached">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-flex p-1 align-items-center border-bottom ">
                                                <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                            </span>
                                            <span class="d-flex h-100 p-1 px-2">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column p-1 px-2">
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                        </span>

                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Detached</h5>
                            </div>
                        </div>
                    </div>

                    <h5 class="my-3 font-16 fw-bold">Topbar Color</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color"
                                    id="topbar-color-light" value="light">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
                                    <div id="sidebar-size">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>

                                    <div id="topnav-color">
                                        <span class="d-flex h-100 flex-column">
                                            <span
                                                class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                            </span>
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </div>
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                        </div>

                        <div class="col-4" style="--ct-dark-rgb: 64,73,84;">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color"
                                    id="topbar-color-dark" value="dark">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
                                    <div id="sidebar-size">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-primary-lighten rounded mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-dark d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>

                                    <div id="topnav-color">
                                        <span class="d-flex h-100 flex-column">
                                            <span
                                                class="bg-dark d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                <span class="d-block p-1 bg-primary-lighten rounded me-1"></span>
                                                <span
                                                    class="d-block border border-primary border-opacity-25 border-3 rounded ms-auto"></span>
                                                <span
                                                    class="d-block border border-primary border-opacity-25 border-3 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-primary border-opacity-25 border-3 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-primary border-opacity-25 border-3 rounded ms-1"></span>
                                            </span>
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </div>
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color"
                                    id="topbar-color-brand" value="brand">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-brand">
                                    <div id="sidebar-size">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-primary bg-gradient d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>

                                    <div id="topnav-color">
                                        <span class="d-flex h-100 flex-column">
                                            <span
                                                class="bg-primary bg-gradient d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                <span class="d-block p-1 bg-light opacity-25 rounded me-1"></span>
                                                <span
                                                    class="d-block border border-3 border opacity-25 rounded ms-auto"></span>
                                                <span
                                                    class="d-block border border-3 border opacity-25 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-3 border opacity-25 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-3 border opacity-25 rounded ms-1"></span>
                                            </span>
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </div>
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Brand</h5>
                        </div>
                    </div>

                    <div>
                        <h5 class="my-3 font-16 fw-bold">Menu Color</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-menu-color"
                                        id="leftbar-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-color-light">
                                        <div id="sidebar-size">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span
                                                        class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>

                                        <div id="topnav-color">
                                            <span class="d-flex h-100 flex-column">
                                                <span
                                                    class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                    <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                </span>
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                            </div>

                            <div class="col-4" style="--ct-dark-rgb: 64,73,84;">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-menu-color"
                                        id="leftbar-color-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-color-dark">
                                        <div id="sidebar-size">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-dark d-flex h-100 flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary rounded border-opacity-25 border-3 w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary rounded border-opacity-25 border-3 w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary rounded border-opacity-25 border-3 w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary rounded border-opacity-25 border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>

                                        <div id="topnav-color">
                                            <span class="d-flex h-100 flex-column">
                                                <span
                                                    class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-primary border-opacity-25">
                                                    <span class="d-block p-1 bg-primary-lighten rounded me-1"></span>
                                                    <span
                                                        class="d-block border border-secondary rounded border-opacity-25 border-3 ms-auto"></span>
                                                    <span
                                                        class="d-block border border-secondary rounded border-opacity-25 border-3 ms-1"></span>
                                                    <span
                                                        class="d-block border border-secondary rounded border-opacity-25 border-3 ms-1"></span>
                                                    <span
                                                        class="d-block border border-secondary rounded border-opacity-25 border-3 ms-1"></span>
                                                </span>
                                                <span class="bg-dark d-block p-1"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-menu-color"
                                        id="leftbar-color-brand" value="brand">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-color-brand">
                                        <div id="sidebar-size">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span
                                                        class="bg-primary bg-gradient d-flex h-100 flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-light-lighten rounded mb-1"></span>
                                                        <span
                                                            class="d-block border opacity-25 rounded border-3 w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border opacity-25 rounded border-3 w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border opacity-25 rounded border-3 w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border opacity-25 rounded border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>

                                        <div id="topnav-color">
                                            <span class="d-flex h-100 flex-column">
                                                <span
                                                    class="bg-light d-flex p-1 align-items-center border-bottom border-secondary">
                                                    <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                </span>
                                                <span class="bg-primary bg-gradient d-block p-1"></span>
                                            </span>
                                        </div>

                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Brand</h5>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-size">
                        <h5 class="my-3 font-16 fw-bold">Sidebar Size</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-size"
                                        id="leftbar-size-default" value="default">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-default">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Default</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-size"
                                        id="leftbar-size-compact" value="compact">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-compact">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Compact</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-size"
                                        id="leftbar-size-small" value="condensed">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-small">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end flex-column"
                                                    style="padding: 2px;">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Condensed</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-size"
                                        id="leftbar-size-small-hover" value="sm-hover">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-small-hover">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end flex-column"
                                                    style="padding: 2px;">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Hover View</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-size"
                                        id="leftbar-size-full" value="full">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-full">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="d-block p-1 bg-dark-lighten mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Full Layout</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-size"
                                        id="leftbar-size-fullscreen" value="fullscreen">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-fullscreen">
                                        <span class="d-flex h-100">
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Fullscreen Layout</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-position">
                        <h5 class="my-3 font-16 fw-bold">Layout Position</h5>

                        <div class="btn-group radio" role="group">
                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed"
                                value="fixed">
                            <label class="btn btn-soft-primary w-sm" for="layout-position-fixed">Fixed</label>

                            <input type="radio" class="btn-check" name="data-layout-position"
                                id="layout-position-scrollable" value="scrollable">
                            <label class="btn btn-soft-primary w-sm ms-0"
                                for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>

                    <div id="sidebar-user">
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <label class="font-16 fw-bold m-0" for="sidebaruser-check">Sidebar User Info</label>
                            <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" name="sidebar-user"
                                    id="sidebaruser-check">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="offcanvas-footer border-top p-3 text-center">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                </div>
                <div class="col-6">
                    <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
                        target="_blank" role="button" class="btn btn-primary w-100">Buy Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>


<!-- Mirrored from coderthemes.com/hyper_2/saas/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Oct 2024 17:04:15 GMT -->

</html>