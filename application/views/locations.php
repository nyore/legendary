<article id="post-19" class="post-19 page type-page status-publish hentry">

    <div class="entry-content">
        <script>// <![CDATA[
            $(document).ready(function () {

                $("select").change(function () {

                    $("select option:selected").each(function () {

                        if ($(this).attr("value") == "view-all") {

                            $(".legendary-location").show();

                        }

                        if ($(this).attr("value") == "buckhead") {

                            $(".legendary-location").hide();

                            $(".buckhead").show();

                        }

                        if ($(this).attr("value") == "chamblee") {

                            $(".legendary-location").hide();

                            $(".chamblee").show();

                        }

                        if ($(this).attr("value") == "chattahoochee-hills") {

                            $(".legendary-location").hide();

                            $(".chattahoochee-hills").show();

                        }

                        if ($(this).attr("value") == "clarkesville") {

                            $(".legendary-location").hide();

                            $(".clarkesville").show();

                        }

                        if ($(this).attr("value") == "decatur") {

                            $(".legendary-location").hide();

                            $(".decatur").show();

                        }

                        if ($(this).attr("value") == "downtown") {

                            $(".legendary-location").hide();

                            $(".downtown").show();

                        }
                        if ($(this).attr("value") == "druid-hills") {

                            $(".legendary-location").hide();

                            $(".druid-hills").show();

                        }
                        if ($(this).attr("value") == "emory-university") {

                            $(".legendary-location").hide();

                            $(".emory-university").show();

                        }
                        if ($(this).attr("value") == "inman-park") {

                            $(".legendary-location").hide();

                            $(".inman-park").show();

                        }
                        if ($(this).attr("value") == "king-plow") {

                            $(".legendary-location").hide();

                            $(".king-plow").show();

                        }
                        if ($(this).attr("value") == "midtown") {

                            $(".legendary-location").hide();

                            $(".midtown").show();

                        }
                        if ($(this).attr("value") == "greensboro") {

                            $(".legendary-location").hide();

                            $(".greensboro").show();

                        }

                    });

                }).change();

            });
            // ]]&gt;</script>
        <div id="legendary-locations-container">
            <h2 class="page-title">Legendary Locations</h2>
            <div id="title-border"></div>
            <div id="locations-dropdown">

                <select>
                    <option>Choose a Location</option>
                    <option value="view-all">
                        View All Locations
                    </option>

                    <option value="buckhead">
                        Buckhead
                    </option>

                    <option value="chamblee">
                        Chamblee
                    </option>

                    <option value="chattahoochee-hills">
                        Chattahoochee Hills
                    </option>


                    <option value="downtown" selected="selected">
                        Downtown
                    </option>

                    <option value="druid-hills">
                        Druid Hills
                    </option>


                    <option value="inman-park">
                        Inman Park
                    </option>

                    <option value="king-plow">
                        West Midtown
                    </option>

                    <option value="midtown">
                        Midtown
                    </option>
                </select>

            </div>

            <!-- Locations saved in Settings/Global Content Blocks -->

            <div id="estate" class="legendary-location buckhead" style="display: none;">
                <div class="locations-left">
                    <a href="http://www.flourishatlanta.com/"><img src="<?php echo base_url('media/images/Flourish02.png'); ?>" alt="Flourish02"
                                                                   class="aligncenter size-full wp-image-10197"
                                                                   width="368" height="183"></a>

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Flourish &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To
                        open fall 2015</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Buckhead</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>800</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>700</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:%20mlend@legendaryevents.com?cc=dlishness@legendaryevents.com">​Michele
                                    Lend</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location buckhead" style="display: none;">
                <div class="locations-left">

                    <a href="http://www.estateatlanta.com/" target="_blank"><img
                            src="<?php echo base_url('media/images/Flolocation-estate.jpg'); ?>" alt="The Estate"></a>

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Estate</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Buckhead</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor/Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>350</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>180</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>

                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:srosenberg@legendaryevents.com?cc=dlishness@legendaryevents.com">Sabrina
                                    Rosenberg​</a>​
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location midtown" style="display: none;">
                <div class="locations-left">

                    <img src="<?php echo base_url('media/images/AmericanSpiritWorks.png'); ?>" alt="American Spirit Works">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">American Spirit Works</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Midtown</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:ktraylor@legendaryevents.com?cc=dlishness@legendaryevents.com">​Kindall
                                    Traylor</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location druid-hills" style="display: none;">
                <div class="locations-left">

                    <img src="<?php echo base_url('media/images/atlanta-botanical-garden.png'); ?>" alt="Atlanta Botanical Gardens">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Atlanta Botanical Gardens</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Druid Hills</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor/Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:rhall@legendaryevents.com?cc=dlishness@legendaryevents.com">​Robert
                                    Hall</a>​
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location king-plow" style="display: none;">
                <div class="locations-left">

                    <img src="<?php echo base_url('media/images/Atlanta_Contemporary_Art_Center.png'); ?>"
                         alt="Atlanta Contemporary Arts Center">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Atlanta Contemporary Arts Center</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">West Midtown</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor/Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:ktraylor@legendaryevents.com?cc=dlishness@legendaryevents.com">​Kindall
                                    Traylor</a>​
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location midtown" style="display: none;">
                <div class="locations-left">

                    <img src="<?php echo base_url('media/images/Biltmore-Ballrooms.png'); ?>" alt="The Biltmore ">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">The Biltmore </h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Midtown</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>1500</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:ktraylor@legendaryevents.com?cc=dlishness@legendaryevents.com">​Kindall
                                    Traylor</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location druid-hills" style="display: none;">
                <div class="locations-left">

                    <img src="<?php echo base_url('media/images/Callanwolde-Fine-Arts-Center.png'); ?>" alt="Callanwolde Fine Arts Center">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Callanwolde Fine Arts Center</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Druid Hills</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor/Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:rhall@legendaryevents.com?cc=dlishness@legendaryevents.com">​Robert
                                    Hall</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location downtown" style="display: block;">
                <div class="locations-left">

                    <img src="<?php echo base_url('media/images/CollegeFootball-HallofFame.png'); ?>" alt="College Football Hall of Fame">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">College Football Hall of Fame</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Downtown</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor/Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>800</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>400</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:amichael@legendaryevents.com?cc=dlishness@legendaryevents.com">Ansley
                                    Michael​</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location downtown" style="display: block;">
                <div class="locations-left">

                    <img src="<?php echo base_url('media/images/CNN-Center.png'); ?>" alt="CNN Center">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">CNN Center</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Downtown</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>150</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>400</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:amichael@legendaryevents.com?cc=dlishness@legendaryevents.com">Ansley
                                    Michael</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location downtown" style="display: block;">
                <div class="locations-left">

                    <img src="<?php echo base_url('media/images/Delta-Flight-Museum.png'); ?>" alt="Delta Flight Museum">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Delta Flight Museum</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Downtown</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor/Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>2000</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>1200</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:kvincent@legendaryevents.com?cc=dlishness@legendaryevents.com">Kelly
                                    Vincent​​</a>​
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location druid-hills" style="display: none;">
                <div class="locations-left">

                    <img src="<?php echo base_url('media/images/Fernbank-Museum-of-Natural-History.png'); ?>"
                         alt="Fernbank Museum of Natural History">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Fernbank Museum of Natural History</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Druid-Hills</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor/Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>2000</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>400</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:amichael@legendaryevents.com?cc=dlishness@legendaryevents.com">Ansley
                                    Michael​</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location king-plow" style="display: none;">
                <div class="locations-left">

                    <img src="<?php echo base_url('media/images/Foundry-at-Puritan-Mill.png'); ?>" alt="Foundry at Puritan Mill">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Foundry at Puritan Mill</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">West Midtown</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor/Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>1200</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>800</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:ktraylor@legendaryevents.com?cc=dlishness@legendaryevents.com">​Kindall
                                    Traylor</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location midtown" style="display: none;">
                <div class="locations-left">

                    <img src="<?php echo base_url('media/images/Fox-Theatre.png'); ?>" alt="Fox Theatre">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Fox Theatre</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Midtown</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor/Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>800</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>400</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:rhall@legendaryevents.com?cc=dlishness@legendaryevents.com">​Robert
                                    Hall</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location buckhead" style="display: none;">
                <div class="locations-left">

                    <img src="locations_files/Grand-Overlook-at-Atlanta-History-Center.png"
                         alt="Grand Overlook At Atlanta History Center">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Grand Overlook at Atlanta History Center</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Buckhead</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor/Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>750</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:%20rhall@legendaryevents.com?cc=dlishness@legendaryevents.com">​Robert
                                    Hall</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location chamblee" style="display: none;">
                <div class="locations-left">

                    <img src="locations_files/Hangar-at-Peachtree.png" alt="Hangar at Peachtree">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Hangar at Peachtree</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Chamblee</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>400</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>250</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:rhall@legendaryevents.com?cc=dlishness@legendaryevents.com">​Robert
                                    Hall</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location midtown" style="display: none;">
                <div class="locations-left">

                    <img src="locations_files/High-Museum-of-Art.png" alt="High Museum of Art">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">High Museum of Art</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Midtown</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>600</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>400</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>Catering Sales Contact:</td>
                            <td><a href="mailto:shorgan@legendaryevents.com?cc=dlishness@legendaryevents.com">Sandi
                                    Horgan</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location midtown" style="display: none;">
                <div class="locations-left">

                    <img src="locations_files/Kai-Lin-Art-Gallery.png" alt="Kai Lin Art Gallery">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Kai Lin Art Gallery</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Midtown</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>75</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:rhall@legendaryevents.com?cc=dlishness@legendaryevents.com">​Robert
                                    Hall</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location buckhead" style="display: none;">
                <div class="locations-left">

                    <img src="locations_files/JW-MarriotBuckhead-Atlanta.png" alt="JW Marriott">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">JW Marriott</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Buckhead</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor/Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>250</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <td class="italics">Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:shorgan@legendaryevents.com?cc=dlishness@legendaryevents.com">Sandi
                                    Horgan</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location midtown" style="display: none;">
                <div class="locations-left">

                    <img src="locations_files/Margaret-Mitchell-House.png" alt="Margaret Mitchell House">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Margaret Mitchell House</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Midtown</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor/Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>140</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:rhall@legendaryevents.com?cc=dlishness@legendaryevents.com">​Robert
                                    Hall</a>​
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location midtown" style="display: none;">
                <div class="locations-left">

                    <img src="locations_files/Mason-Fine-Arts-Events.png" alt="Mason Fine Arts &amp; Events">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Mason Fine Arts and Events</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Midtown</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>900</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>400</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:rhall@legendaryevents.com?cc=dlishness@legendaryevents.com">​Robert
                                    Hall</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location midtown" style="display: none;">
                <div class="locations-left">

                    <img src="locations_files/Millennium-Gate.png" alt="Millennium Gate">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Millennium Gate</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Midtown</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor (limited)/Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>175 (Outdoor only)</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:ktraylor@legendaryevents.com?cc=dlishness@legendaryevents.com">Kindall
                                    Traylor</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location downtown" style="display: block;">
                <div class="locations-left">

                    <img src="<?php echo base_url('media/images/Rialto-Center-for-the-Performing-Arts.png'); ?>"
                         alt="Rialto Center for the Performing Arts">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Rialto Center for the Performing Arts</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Downtown</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor/Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>650</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>250</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:rhall@legendaryevents.com?cc=dlishness@legendaryevents.com">​Robert
                                    Hall</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location chattahoochee-hills" style="display: none;">
                <div class="locations-left">

                    <img src="locations_files/Serenbe.png" alt="Serenbe">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Serenbe</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Chattahoochee Hills</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>250</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:spolk@legendaryevents.com?cc=dlishness@legendaryevents.com">​Sam
                                    Polk</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location king-plow" style="display: none;">
                <div class="locations-left">

                    <img src="locations_files/Summerour-Studios.png" alt="Summerour Studios">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Summerour Studios</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">West Midtown</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor/Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>425</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>325</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:ktraylor@legendaryevents.com?cc=dlishness@legendaryevents.com">​Kindall
                                    Traylor</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location buckhead" style="display: none;">
                <div class="locations-left">

                    <img src="locations_files/Swan-House-at-Atlanta-History-Center.png"
                         alt="Swan House At Atlanta History Center">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Swan House at Atlanta History Center</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Buckhead</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>800</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions</td>
                            <td><a href="mailto:rhall@legendaryevents.com?cc=dlishness@legendaryevents.com">​Robert
                                    Hall</a>​
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location downtown" style="display: block;">
                <div class="locations-left">

                    <img src="<?php echo base_url('media/images/Tabernacle.png'); ?>" alt="Tabernacle ">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Tabernacle </h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Downtown</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor/Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>2500</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>400</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:ktraylor@legendaryevents.com?cc=dlishness@legendaryevents.com">​Kindall
                                    Traylor</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location midtown" style="display: none;">
                <div class="locations-left">

                    <img src="locations_files/The-Temple.png" alt="The Temple">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">The Temple</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Midtown</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor/Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>600</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:%E2%80%8Bktraylor@legendaryevents.com?cc=dlishness@legendaryevents.com">Kindall
                                    Traylor</a></td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location king-plow" style="display: none;">
                <div class="locations-left">

                    <img src="locations_files/Westside-Cultural-Arts-Center.png" alt="Westside Cultural Arts Center ">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Westside Cultural Arts Center </h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">West Midtown</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor/Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>550</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:rhall@legendaryevents.com?cc=dlishness@legendaryevents.com">​Robert
                                    Hall</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location downtown" style="display: block;">
                <div class="locations-left">

                    <img src="<?php echo base_url('media/images/World-of-Coca-Cola.png'); ?>" alt="World of Coca Cola">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">World of Coca Cola</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Downtown</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor/Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>1500</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:rhall@legendaryevents.com?cc=dlishness@legendaryevents.com">​Robert
                                    Hall</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location buckhead" style="display: none;">
                <div class="locations-left">

                    <img src="locations_files/Smith-Family-Farm-at-atlanta-history-center.png"
                         alt="Smith Family Farm At Atlanta History Center">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Smith Family Farm at Atlanta History Center</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Buckhead</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>350</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>350</td>
                        </tr>
                        <tr>
                            <td class="italics">Catering, Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions</td>
                            <td><a href="mailto:rhall@legendaryevents.com?cc=dlishness@legendaryevents.com">​Robert
                                    Hall</a>​
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>


            <!-- Locations Below Only Design & Floral -->
            <div id="estate" class="legendary-location buckhead" style="display: none;">
                <div class="locations-left">

                    <img src="locations_files/Buckhead-Theatre.png" alt="Buckhead Theatre">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Buckhead Theatre</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Buckhead</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>2000</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>510</td>
                        </tr>
                        <tr>
                            <td class="italics">Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:ktraylor@legendaryevents.com?cc=dlishness@legendaryevents.com">​Kindall
                                    Traylor</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location bulkhead" style="display: none;">
                <div class="locations-left">

                    <img src="locations_files/Cobb-Energy-Center.png" alt="Cobb Energy Center">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Cobb Energy Center</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Buckhead</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>630</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td class="italics">Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:amichael@legendaryevents.com?cc=dlishness@legendaryevents.com">Ansley
                                    Michael</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location buckhead" style="display: none;">
                <div class="locations-left">

                    <img src="locations_files/Cobb-Galleria-Centre.png" alt="Cobb Galleria Centre">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Cobb Galleria Centre</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Buckhead</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>3300</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>1600</td>
                        </tr>
                        <tr>
                            <td class="italics">Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:amichael@legendaryevents.com?cc=dlishness@legendaryevents.com">Ansley
                                    Michael</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location midtown" style="display: none;">
                <div class="locations-left">

                    <img src="locations_files/Four-Seasons-Hotel.png" alt="Four Seasons Hotel">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Four Seasons Hotel</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Midtown</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>320</td>
                        </tr>
                        <tr>
                            <td class="italics">Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:amichael@legendaryevents.com?cc=dlishness@legendaryevents.com">Ansley
                                    Michael</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="estate" class="legendary-location downtown" style="display: block;">
                <div class="locations-left">

                    <img src="<?php echo base_url('media/images/Georgia-Aquarium.png'); ?>" alt="Georgia Aquarium">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Georgia Aquarium</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Downtown</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor/Outdoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>1500</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td class="italics">Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:amichael@legendaryevents.com?cc=dlishness@legendaryevents.com">Ansley
                                    Michael​</a>​
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div id="estate" class="legendary-location buckhead" style="display: none;">
                <div class="locations-left">

                    <img src="locations_files/The-Westin-Buckhead-Atlanta.png" alt="Westin Buckhead Atlanta">

                </div>
                <div class="locations-right">
                    <h3 class="locations-title">Westin Buckhead Atlanta</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td class="bold location-table-left">Location</td>
                            <td class="bold location-table-right">Buckhead</td>
                        </tr>
                        <tr>
                            <td>Facility</td>
                            <td>Indoor</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Reception</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td>Maximum Capacity Seated</td>
                            <td>650</td>
                        </tr>
                        <tr>
                            <td class="italics">Design &amp; Floral</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="location-sales-contact bold">Sales Contact</td>
                            <td class="location-sales-contact"></td>
                        </tr>
                        <tr>
                            <td>All Occasions:</td>
                            <td><a href="mailto:shorgan@legendaryevents.com?cc=dlishness@legendaryevents.com">​Sandi
                                    Horgan</a>​
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            


            <!-- /End Global Content Blocks -->


        </div>
    </div>
</article>