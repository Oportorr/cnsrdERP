<div class="card card-block">
    <div id="notify" class="alert alert-success" style="display:none;">
        <a href="#" class="close" data-dismiss="alert">&times;</a>

        <div class="message"></div>
    </div>
    <form method="post" id="product_action" class="form-horizontal">
        <div class="card-body">

            <h5><?php echo $this->lang->line('Date & Time Format') ?></h5>
            <hr>


            <input type="hidden" name="id" value="<?php echo $company['id'] ?>">
            <div class="form-group row">

                <label class="col-sm-4 col-form-label"
                       for="tzone"><?php echo $this->lang->line('Time Zone') ?></label>

                <div class="col-sm-4">
                    <select class="form-control" name="tzone">
                        <option value="<?php

                        echo $company['zone'] ?>" selected><?php

                            echo $company['zone'];

                            ?></option>
                        <option value="Pacific/Midway">(UTC-11:00) Midway Island</option>
                        <option value="Pacific/Samoa">(UTC-11:00) Samoa</option>
                        <option value="Pacific/Honolulu">(UTC-10:00) Hawaii</option>
                        <option value="US/Alaska">(UTC-09:00) Alaska</option>
                        <option value="America/Los_Angeles">(UTC-08:00) Pacific Time (US &amp; Canada)</option>
                        <option value="America/Tijuana">(UTC-08:00) Tijuana</option>
                        <option value="US/Arizona">(UTC-07:00) Arizona</option>
                        <option value="America/Chihuahua">(UTC-07:00) Chihuahua</option>
                        <option value="America/Chihuahua">(UTC-07:00) La Paz</option>
                        <option value="America/Mazatlan">(UTC-07:00) Mazatlan</option>
                        <option value="US/Mountain">(UTC-07:00) Mountain Time (US &amp; Canada)</option>
                        <option value="America/Managua">(UTC-06:00) Central America</option>
                        <option value="US/Central">(UTC-06:00) Central Time (US &amp; Canada)</option>
                        <option value="America/Mexico_City">(UTC-06:00) Guadalajara</option>
                        <option value="America/Mexico_City">(UTC-06:00) Mexico City</option>
                        <option value="America/Monterrey">(UTC-06:00) Monterrey</option>
                        <option value="Canada/Saskatchewan">(UTC-06:00) Saskatchewan</option>
                        <option value="America/Bogota">(UTC-05:00) Bogota</option>
                        <option value="US/Eastern">(UTC-05:00) Eastern Time (US &amp; Canada)</option>
                        <option value="US/East-Indiana">(UTC-05:00) Indiana (East)</option>
                        <option value="America/Lima">(UTC-05:00) Lima</option>
                        <option value="America/Bogota">(UTC-05:00) Quito</option>
                        <option value="Canada/Atlantic">(UTC-04:00) Atlantic Time (Canada)</option>
                        <option value="America/Caracas">(UTC-04:30) Caracas</option>
                        <option value="America/La_Paz">(UTC-04:00) La Paz</option>
                        <option value="America/Santiago">(UTC-04:00) Santiago</option>
                        <option value="Canada/Newfoundland">(UTC-03:30) Newfoundland</option>
                        <option value="America/Sao_Paulo">(UTC-03:00) Brasilia</option>
                        <option value="America/Argentina/Buenos_Aires">(UTC-03:00) Buenos Aires</option>
                        <option value="America/Argentina/Buenos_Aires">(UTC-03:00) Georgetown</option>
                        <option value="America/Godthab">(UTC-03:00) Greenland</option>
                        <option value="America/Noronha">(UTC-02:00) Mid-Atlantic</option>
                        <option value="Atlantic/Azores">(UTC-01:00) Azores</option>
                        <option value="Atlantic/Cape_Verde">(UTC-01:00) Cape Verde Is.</option>
                        <option value="Africa/Casablanca">(UTC+00:00) Casablanca</option>
                        <option value="Europe/London">(UTC+00:00) Edinburgh</option>
                        <option value="Etc/Greenwich">(UTC+00:00) Greenwich Mean Time : Dublin</option>
                        <option value="Europe/Lisbon">(UTC+00:00) Lisbon</option>
                        <option value="Europe/London">(UTC+00:00) London</option>
                        <option value="Africa/Monrovia">(UTC+00:00) Monrovia</option>
                        <option value="UTC">(UTC+00:00) UTC</option>
                        <option value="Europe/Amsterdam">(UTC+01:00) Amsterdam</option>
                        <option value="Europe/Belgrade">(UTC+01:00) Belgrade</option>
                        <option value="Europe/Berlin">(UTC+01:00) Berlin</option>
                        <option value="Europe/Berlin">(UTC+01:00) Bern</option>
                        <option value="Europe/Bratislava">(UTC+01:00) Bratislava</option>
                        <option value="Europe/Brussels">(UTC+01:00) Brussels</option>
                        <option value="Europe/Budapest">(UTC+01:00) Budapest</option>
                        <option value="Europe/Copenhagen">(UTC+01:00) Copenhagen</option>
                        <option value="Europe/Ljubljana">(UTC+01:00) Ljubljana</option>
                        <option value="Europe/Madrid">(UTC+01:00) Madrid</option>
                        <option value="Europe/Paris">(UTC+01:00) Paris</option>
                        <option value="Europe/Prague">(UTC+01:00) Prague</option>
                        <option value="Europe/Rome">(UTC+01:00) Rome</option>
                        <option value="Europe/Sarajevo">(UTC+01:00) Sarajevo</option>
                        <option value="Europe/Skopje">(UTC+01:00) Skopje</option>
                        <option value="Europe/Stockholm">(UTC+01:00) Stockholm</option>
                        <option value="Europe/Vienna">(UTC+01:00) Vienna</option>
                        <option value="Europe/Warsaw">(UTC+01:00) Warsaw</option>
                        <option value="Africa/Lagos">(UTC+01:00) West Central Africa</option>
                        <option value="Europe/Zagreb">(UTC+01:00) Zagreb</option>
                        <option value="Europe/Athens">(UTC+02:00) Athens</option>
                        <option value="Europe/Bucharest">(UTC+02:00) Bucharest</option>
                        <option value="Africa/Cairo">(UTC+02:00) Cairo</option>
                        <option value="Africa/Harare">(UTC+02:00) Harare</option>
                        <option value="Europe/Helsinki">(UTC+02:00) Helsinki</option>
                        <option value="Europe/Istanbul">(UTC+02:00) Istanbul</option>
                        <option value="Asia/Jerusalem">(UTC+02:00) Jerusalem</option>
                        <option value="Europe/Helsinki">(UTC+02:00) Kyiv</option>
                        <option value="Africa/Johannesburg">(UTC+02:00) Pretoria</option>
                        <option value="Europe/Riga">(UTC+02:00) Riga</option>
                        <option value="Europe/Sofia">(UTC+02:00) Sofia</option>
                        <option value="Europe/Tallinn">(UTC+02:00) Tallinn</option>
                        <option value="Europe/Vilnius">(UTC+02:00) Vilnius</option>
                        <option value="Asia/Baghdad">(UTC+03:00) Baghdad</option>
                        <option value="Asia/Kuwait">(UTC+03:00) Kuwait</option>
                        <option value="Europe/Minsk">(UTC+03:00) Minsk</option>
                        <option value="Africa/Nairobi">(UTC+03:00) Nairobi</option>
                        <option value="Asia/Riyadh">(UTC+03:00) Riyadh</option>
                        <option value="Europe/Volgograd">(UTC+03:00) Volgograd</option>
                        <option value="Asia/Tehran">(UTC+03:30) Tehran</option>
                        <option value="Asia/Muscat">(UTC+04:00) Abu Dhabi</option>
                        <option value="Asia/Baku">(UTC+04:00) Baku</option>
                        <option value="Europe/Moscow">(UTC+04:00) Moscow</option>
                        <option value="Asia/Muscat">(UTC+04:00) Muscat</option>
                        <option value="Europe/Moscow">(UTC+04:00) St. Petersburg</option>
                        <option value="Asia/Tbilisi">(UTC+04:00) Tbilisi</option>
                        <option value="Asia/Yerevan">(UTC+04:00) Yerevan</option>
                        <option value="Asia/Kabul">(UTC+04:30) Kabul</option>
                        <option value="Asia/Karachi">(UTC+05:00) Islamabad</option>
                        <option value="Asia/Karachi">(UTC+05:00) Karachi</option>
                        <option value="Asia/Tashkent">(UTC+05:00) Tashkent</option>
                        <option value="Asia/Calcutta">(UTC+05:30) Chennai</option>
                        <option value="Asia/Kolkata">(UTC+05:30) Kolkata</option>
                        <option value="Asia/Calcutta">(UTC+05:30) Mumbai</option>
                        <option value="Asia/Calcutta">(UTC+05:30) New Delhi</option>
                        <option value="Asia/Calcutta">(UTC+05:30) Sri Jayawardenepura</option>
                        <option value="Asia/Katmandu">(UTC+05:45) Kathmandu</option>
                        <option value="Asia/Almaty">(UTC+06:00) Almaty</option>
                        <option value="Asia/Dhaka">(UTC+06:00) Astana</option>
                        <option value="Asia/Dhaka">(UTC+06:00) Dhaka</option>
                        <option value="Asia/Yekaterinburg">(UTC+06:00) Ekaterinburg</option>
                        <option value="Asia/Rangoon">(UTC+06:30) Rangoon</option>
                        <option value="Asia/Bangkok">(UTC+07:00) Bangkok</option>
                        <option value="Asia/Bangkok">(UTC+07:00) Hanoi</option>
                        <option value="Asia/Jakarta">(UTC+07:00) Jakarta</option>
                        <option value="Asia/Novosibirsk">(UTC+07:00) Novosibirsk</option>
                        <option value="Asia/Hong_Kong">(UTC+08:00) Beijing</option>
                        <option value="Asia/Chongqing">(UTC+08:00) Chongqing</option>
                        <option value="Asia/Hong_Kong">(UTC+08:00) Hong Kong</option>
                        <option value="Asia/Krasnoyarsk">(UTC+08:00) Krasnoyarsk</option>
                        <option value="Asia/Kuala_Lumpur">(UTC+08:00) Kuala Lumpur</option>
                        <option value="Australia/Perth">(UTC+08:00) Perth</option>
                        <option value="Asia/Singapore">(UTC+08:00) Singapore</option>
                        <option value="Asia/Taipei">(UTC+08:00) Taipei</option>
                        <option value="Asia/Ulan_Bator">(UTC+08:00) Ulaan Bataar</option>
                        <option value="Asia/Urumqi">(UTC+08:00) Urumqi</option>
                        <option value="Asia/Irkutsk">(UTC+09:00) Irkutsk</option>
                        <option value="Asia/Tokyo">(UTC+09:00) Osaka</option>
                        <option value="Asia/Tokyo">(UTC+09:00) Sapporo</option>
                        <option value="Asia/Seoul">(UTC+09:00) Seoul</option>
                        <option value="Asia/Tokyo">(UTC+09:00) Tokyo</option>
                        <option value="Australia/Adelaide">(UTC+09:30) Adelaide</option>
                        <option value="Australia/Darwin">(UTC+09:30) Darwin</option>
                        <option value="Australia/Brisbane">(UTC+10:00) Brisbane</option>
                        <option value="Australia/Canberra">(UTC+10:00) Canberra</option>
                        <option value="Pacific/Guam">(UTC+10:00) Guam</option>
                        <option value="Australia/Hobart">(UTC+10:00) Hobart</option>
                        <option value="Australia/Melbourne">(UTC+10:00) Melbourne</option>
                        <option value="Pacific/Port_Moresby">(UTC+10:00) Port Moresby</option>
                        <option value="Australia/Sydney">(UTC+10:00) Sydney</option>
                        <option value="Asia/Yakutsk">(UTC+10:00) Yakutsk</option>
                        <option value="Asia/Vladivostok">(UTC+11:00) Vladivostok</option>
                        <option value="Pacific/Auckland">(UTC+12:00) Auckland</option>
                        <option value="Pacific/Fiji">(UTC+12:00) Fiji</option>
                        <option value="Pacific/Kwajalein">(UTC+12:00) International Date Line West</option>
                        <option value="Asia/Kamchatka">(UTC+12:00) Kamchatka</option>
                        <option value="Asia/Magadan">(UTC+12:00) Magadan</option>
                        <option value="Pacific/Fiji">(UTC+12:00) Marshall Is.</option>
                        <option value="Asia/Magadan">(UTC+12:00) New Caledonia</option>
                        <option value="Asia/Magadan">(UTC+12:00) Solomon Is.</option>
                        <option value="Pacific/Auckland">(UTC+12:00) Wellington</option>
                        <option value="Pacific/Tongatapu">(UTC+13:00) Nuku'alofa</option>
                    </select>
                </div>
            </div>


            <div class="form-group row">

                <label class="col-sm-4 col-form-label"
                       for="product_name"><?php echo $this->lang->line('Date Format(Billing)') ?></label>

                <div class="col-sm-4"><select name="dateformat" class="form-control">

                        <?php

                        echo '<option value="' . $company['dformat'] . '">*' . strtoupper($this->config->item('dformat2')) . '*</option>'; ?>
                        <option value="1">DD-MM-YYYY</option>
                        <option value="2">YYYY-MM-DD</option>
                        <!--<option value="3">MM-DD-YYYY</option>-->
                    </select>


                </div>
            </div>


            <div class="form-group row">

                <label class="col-sm-4 col-form-label"></label>

                <div class="col-sm-4">
                    <input type="submit" id="time_update" class="btn btn-success margin-bottom"
                           value="<?php echo $this->lang->line('Update') ?>" data-loading-text="Updating...">
                </div>
            </div>

        </div>
    </form>
</div>

<script type="text/javascript">
    $("#time_update").click(function (e) {
        e.preventDefault();
        var actionurl = baseurl + 'settings/dtformat';
        actionProduct(actionurl);
    });
</script>

