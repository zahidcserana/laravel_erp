<nobr>
    <div class="nodeheader">
        <b id="name1111" name="eMed">
        </b>
        <img src="{{asset('images/tree_image/utree_data/minus_old.gif')}}" onMouseOver="this.border='1';" onMouseOut="this.border='0';" id="image1111" onClick="SetNode('1111');" border="0">
        <img src="{{asset('images/tree_image/utree_data/open.gif')}}" id="nodeimage1111" onDblClick="SetNode('1111');">ERP
    </div>
    <div class="nodedocuments" id="documents1111" style="display: block; margin-left: 16px;">

        <!--=============================================Production============================================-->
        <!--Header Start-->
        <div class="nodeheader">
            <b id="name600" name="Production">
        </b>
            <img src="{{asset('images/tree_image/utree_data/minus_old.gif')}}" onMouseOver="this.border='1';" onMouseOut="this.border='0';" id="image600" onClick="SetNode('600');" border="0">
            <img src="{{asset('images/tree_image/utree_data/open.gif')}}" id="nodeimage600" onDblClick="SetNode('600');">Production
        </div>

        <div class="nodedocuments" id="documents600" style="display: block; margin-left: 16px;">
            <!--Sub-Header Start-->
            <div class="nodeheader">
                <b id="name601" name="Reception ">
          </b>
                <img src="{{asset('images/tree_image/utree_data/plus_old.gif')}}" onMouseOver="this.border='1';" onMouseOut="this.border='0';" id="image601" onClick="SetNode('601');" border="0">
                <img src="{{asset('images/tree_image/utree_data/closed.gif')}}" id="nodeimage601" onDblClick="SetNode('601');">Setup</div>

            <div class="nodedocuments" id="documents601" style="display: none; Margin-left: 16;">
                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('size_info')}}" title="Size Information" target="right" id="dp6014" onClick="MakeColoredBack('6014');">Size Information</a>
                </div>

                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('unit_set')}}" title="Unit" target="right" id="dp691" onClick="MakeColoredBack('691');">Unit Setup</a>
                </div>

                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('raw_material_setup')}}" title="Material Setup" target="right" id="dp692" onClick="MakeColoredBack('692');">Material Setup</a>
                </div>

                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{asset('buyer_info')}}" title="Buyer Information" target="right" id="dp6011" onClick="MakeColoredBack('6011');">Material Supplier Information</a>
                </div>

                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('merchandiser_info')}}" title="Merchandiser Information" target="right" id="dp6012" onClick="MakeColoredBack('6012');">Designer Information</a>
                </div>

                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('fabric_info')}}" title="Merchandiser Information" target="right" id="dp61" onClick="MakeColoredBack('61');">Fabric Details</a>
                </div>

                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('style_color_size_wise_data_entry_form')}}" title="Production Data Issue" target="right" id="dp6022" onClick="MakeColoredBack('6022');"> Order & Costing Sheet  </a>
                </div>
                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('production_pattern')}}" title="Production Pattern" target="right" id="dp6023" onClick="MakeColoredBack('6023');"> Pattern </a>
                </div>
            </div>
            <!--Sub-Header Start-->
            <div class="nodeheader">
                <b id="name602" name="DataEntry">
          </b>
                <img src="{{asset('images/tree_image/utree_data/plus_old.gif')}}" onMouseOver="this.border='1';" onMouseOut="this.border='0';" id="image602" onClick="SetNode('602');" border="0">
                <img src="{{asset('images/tree_image/utree_data/closed.gif')}}" id="nodeimage602" onDblClick="SetNode('602');">Data</div>
            <div class="nodedocuments" id="documents602" style="display: none; Margin-left: 16;">
                <!--Menu Start-->

                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('style_information')}}" title="Style Information" target="right" id="dp6018" onClick="MakeColoredBack('6018');">Style Information</a>
                </div>

                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('cost_sheet')}}" title="Cost Sheet" target="right" id="dp6024" onClick="MakeColoredBack('6024');"> Cost Sheet </a>
                </div>

                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('print_document')}}" title="Print" target="right" id="dp60222" onClick="MakeColoredBack('60222');"> Print </a>
                </div>
            </div>
            <div class="nodeheader">
                <b id="name604" name="Pd_Report">
          		</b>
                <img src="{{asset('images/tree_image/utree_data/plus_old.gif')}}" onMouseOver="this.border='1';" onMouseOut="this.border='0';" id="image604" onClick="SetNode('604');" border="0">
                <img src="{{asset('images/tree_image/utree_data/closed.gif')}}" id="nodeimage604" onDblClick="SetNode('604');">Report
            </div>
            <div class="nodedocuments" id="documents604" style="display: none; Margin-left: 16;">
                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('production_report')}}" title="Production Report" target="right" id="dp6042" onClick="MakeColoredBack('6042');">Design Report</a>
                </div>
                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('style_report')}}" title="Style Report" target="right" id="dp6043" onClick="MakeColoredBack('6043');">Item Report</a>
                </div>
            </div>
        </div>

        <!--=============================================Production============================================-->

        <!--===========================================Inventory Start===============================================-->

        <div class="nodeheader">
            <b id="name10" name="eMed">
        </b>
            <img src="{{asset('images/tree_image/utree_data/minus_old.gif')}}" onMouseOver="this.border='1';" onMouseOut="this.border='0';" id="image101" onClick="SetNode('101');" border="0">
            <img src="{{asset('images/tree_image/utree_data/open.gif')}}" id="nodeimage101" onDblClick="SetNode('101');">Inventory</div>
        <div class="nodedocuments" id="documents101" style="display: block; margin-left: 16px;">

            <div class="nodeheader">

                <b id="name321" name="OP Pharmacy"> </b>


            </div>

            <div class="nodeheader">
                <b id="name321" name="OP Pharmacy">
          </b>
                <img src="{{asset('images/tree_image/utree_data/plus_old.gif')}}" onMouseOver="this.border='1';" onMouseOut="this.border='0';" id="image321" onClick="SetNode('321');">
                <img src="{{asset('images/tree_image/utree_data/closed.gif')}}" id="nodeimage321" onDblClick="SetNode('321');">Setup</div>
            <div class="nodedocuments" id="documents321" style="display: none; Margin-left: 16;">

                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('category_set')}}" title="Category" target="right" id="dp70011" onClick="MakeColoredBack('70011');">Category</a>
                </div>

                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('sub_category_set')}}" title="Sub Category" target="right" id="dp70012" onClick="MakeColoredBack('70012');">Sub Category</a>
                </div>

                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('sub_sub_category_set')}}" title="Sub Category" target="right" id="dp700123" onClick="MakeColoredBack('700123');">Sub Sub Category</a>
                </div>
                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('item_set')}}" title="Item" target="right" id="dp711" onClick="MakeColoredBack('711');">Item</a>
                </div>
            </div>
            <div class="nodeheader">
                <b id="name4001" name="Oreder and Issue">
          </b>
                <img src="{{asset('images/tree_image/utree_data/plus_old.gif')}}" onMouseOver="this.border='1';" onMouseOut="this.border='0';" id="image4001" onClick="SetNode('4001');">
                <img src="{{asset('images/tree_image/utree_data/closed.gif')}}" id="nodeimage4001" onDblClick="SetNode('4001');">Oreder and Issue</div>
            <div class="nodedocuments" id="documents4001" style="display: none; Margin-left: 16;">
                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('raw_material_requirement')}}" title="Raw Material Requirement" target="right" id="dp571" onClick="MakeColoredBack('571');"> Raw Material Requirement </a>
                </div>
                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('receive_item')}}" title="Receive Item" target="right" id="dp7211" onClick="MakeColoredBack('7211');">Receive Material(WareHouse)</a>
                </div>

                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('yarn_issue_item')}}" title="Issue Item (Yarn)" target="right" id="dp7213" onClick="MakeColoredBack('7213');">Issue Material</a>
                </div>
                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('active_production')}}" title="Enter Finished Goods" target="right" id="dp7272" onClick="MakeColoredBack('7272');">Finished Goods</a>
                </div>
            </div>
            <div class="nodeheader">
                <b id="name6002" name="DataEntry"></b>
                <img src="{{asset('images/tree_image/utree_data/plus_old.gif')}}" onMouseOver="this.border='1';" onMouseOut="this.border='0';" id="image6002" onClick="SetNode('6002');" border="0">
                <img src="{{asset('images/tree_image/utree_data/closed.gif')}}" id="nodeimage6002" onDblClick="SetNode('6002');">Data</div>
            <div class="nodedocuments" id="documents6002" style="display: none; Margin-left: 16;">
                <!--Menu Start-->

                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('store')}}" title="store" target="right" id="dp60025" onClick="MakeColoredBack('60025');"> Store </a>
                </div>

                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('finished_goods')}}" title="Cost Sheet" target="right" id="dp60024" onClick="MakeColoredBack('60024');"> Ready For Dispatch </a>
                </div>

            </div>

            <div class="nodeheader">
                <b id="name5001" name="Reports">
          </b>
                <img src="{{asset('images/tree_image/utree_data/plus_old.gif')}}" onMouseOver="this.border='1';" onMouseOut="this.border='0';" id="image5001" onClick="SetNode('5001');">
                <img src="{{asset('images/tree_image/utree_data/closed.gif')}}" id="nodeimage5001" onDblClick="SetNode('5001');">Reports</div>
            <div class="nodedocuments" id="documents5001" style="display: none; Margin-left: 16;">
                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('report_window1')}}" title="Date , PO(Purchase Order) and Style Wise Reports" target="right" id="dp5071" onClick="MakeColoredBack('5071');"> Date, Item and Finished Goods wise Reports</a>
                </div>
                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('receive_material_report')}}" title="Date , PO(Purchase Order) and Style Wise Reports" target="right" id="dp5072" onClick="MakeColoredBack('5072');"> Receive Materials</a>
                </div>
            </div>
        </div>

        <!--===========================================Inventory End =============================================-->

        <!--=============================================Maintenance============================================-->
        <div class="nodeheader">
            <b id="name11000" name="Maintenance">
        </b>
            <img src="{{asset('images/tree_image/utree_data/minus_old.gif')}}" onMouseOver="this.border='1';" onMouseOut="this.border='0';" id="image11000" onClick="SetNode('11000');" border="0">
            <img src="{{asset('images/tree_image/utree_data/open.gif')}}" id="nodeimage11000" onDblClick="SetNode('11000');">Maintenance</div>
        <div class="nodedocuments" id="documents11000" style="display: block; margin-left: 16px;">

            <div class="nodeheader">
                <b id="name14001" name="User">
          </b>
                <img src="{{asset('images/tree_image/utree_data/plus_old.gif')}}" onMouseOver="this.border='1';" onMouseOut="this.border='0';" id="image14001" onClick="SetNode('14001');" border="0">
                <img src="{{asset('images/tree_image/utree_data/closed.gif')}}" id="nodeimage14001" onDblClick="SetNode('14001');">User</div>
            <div class="nodedocuments" id="documents14001" style="display: none; Margin-left: 16;">

                <div class="document">
                    <img src="{{asset('images/tree_image/utree_data/blank.gif')}}">
                    <img src="{{asset('images/tree_image/utree_data/bullet.gif')}}">
                    <a class="header" href="{{route('acl')}}" title="Access Control List" target="right" id="dp5075" onClick="MakeColoredBack('5075');">ACL</a>
                </div>
            </div>
        </div>
    </div>
</nobr>