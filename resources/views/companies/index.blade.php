<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <table id="companies" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>company_name</th>
                            <th>country</th>
                            <th>company_email</th>
                            <th>country_code</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Sipes and Sons</td>
                        <td>Micronesia</td>
                        <td>uharber@cole.com</td>
                        <td>PS</td>
                    </tr>
                    <tr>
                        <td>Waelchi, Raynor and Corwin</td>
                        <td>Russian Federation</td>
                        <td>adeline.schuppe@bergstrom.com</td>
                        <td>AT</td>
                    </tr>
                    <tr>
                        <td>Heidenreich, Gibson and Breitenberg</td>
                        <td>Lesotho</td>
                        <td>manley63@mcclure.com</td>
                        <td>GP</td>
                    </tr>
                    <tr>
                        <td>Kling, Kautzer and Trantow</td>
                        <td>Peru</td>
                        <td>gerhold.dale@larson.com</td>
                        <td>VA</td>
                    </tr>
                    <tr>
                        <td>Davis-Smitham</td>
                        <td>Azerbaijan</td>
                        <td>usatterfield@adams.net</td>
                        <td>TJ</td>
                    </tr>
                    <tr>
                        <td>Zemlak, Pouros and Stokes</td>
                        <td>Cocos (Keeling) Islands</td>
                        <td>wherman@witting.com</td>
                        <td>GT</td>
                    </tr>
                    <tr>
                        <td>Marvin-Balistreri</td>
                        <td>Samoa</td>
                        <td>hailey30@bogisich.com</td>
                        <td>AI</td>
                    </tr>
                    <tr>
                        <td>Murphy, Yundt and Lockman</td>
                        <td>Grenada</td>
                        <td>gerdman@kunze.com</td>
                        <td>UA</td>
                    </tr>
                    <tr>
                        <td>Hintz, Waters and Bernhard</td>
                        <td>Norfolk Island</td>
                        <td>nquigley@greenholt.com</td>
                        <td>SA</td>
                    </tr>
                    <tr>
                        <td>Rempel, Weimann and Jacobson</td>
                        <td>Solomon Islands</td>
                        <td>isabel.nikolaus@fritsch.org</td>
                        <td>CD</td>
                    </tr>
                    <tr>
                        <td>Klein, Zboncak and Rohan</td>
                        <td>Indonesia</td>
                        <td>iweber@collier.com</td>
                        <td>VC</td>
                    </tr>
                    <tr>
                        <td>Kertzmann Group</td>
                        <td>Bahrain</td>
                        <td>alexandrea02@schmeler.biz</td>
                        <td>IR</td>
                    </tr>
                    <tr>
                        <td>Ondricka-Kuhlman</td>
                        <td>Azerbaijan</td>
                        <td>diego.torphy@vandervort.net</td>
                        <td>PM</td>
                    </tr>
                    <tr>
                        <td>Carter LLC</td>
                        <td>Puerto Rico</td>
                        <td>terence.wisoky@ledner.info</td>
                        <td>BZ</td>
                    </tr>
                    <tr>
                        <td>Blick-Abbott</td>
                        <td>Paraguay</td>
                        <td>wwelch@grant.com</td>
                        <td>SR</td>
                    </tr>
                    <tr>
                        <td>Gusikowski, Boyle and Waelchi</td>
                        <td>Myanmar</td>
                        <td>hodkiewicz.tierra@jones.com</td>
                        <td>JM</td>
                    </tr>
                    <tr>
                        <td>Ferry Inc</td>
                        <td>Uruguay</td>
                        <td>jakubowski.michele@pouros.com</td>
                        <td>BH</td>
                    </tr>
                    <tr>
                        <td>Hoeger, Koepp and Dickens</td>
                        <td>Somalia</td>
                        <td>rowena.waters@johns.com</td>
                        <td>MU</td>
                    </tr>
                    <tr>
                        <td>Osinski-Abshire</td>
                        <td>Nauru</td>
                        <td>ford.rice@mitchell.com</td>
                        <td>VN</td>
                    </tr>
                    <tr>
                        <td>Kub and Sons</td>
                        <td>Saint Martin</td>
                        <td>vmaggio@kunde.info</td>
                        <td>FK</td>
                    </tr>
                    <tr>
                        <td>Nicolas, Fisher and Swaniawski</td>
                        <td>Norway</td>
                        <td>xkohler@padberg.com</td>
                        <td>PK</td>
                    </tr>
                    <tr>
                        <td>Auer and Sons</td>
                        <td>Maldives</td>
                        <td>cloyd07@vandervort.biz</td>
                        <td>LU</td>
                    </tr>
                    <tr>
                        <td>Kunze-Wehner</td>
                        <td>Kazakhstan</td>
                        <td>rita.labadie@mcdermott.info</td>
                        <td>EG</td>
                    </tr>
                    <tr>
                        <td>Blick, Bosco and Leannon</td>
                        <td>Equatorial Guinea</td>
                        <td>hill.dashawn@dicki.com</td>
                        <td>PK</td>
                    </tr>
                    <tr>
                        <td>Predovic, Johnson and Casper</td>
                        <td>Tonga</td>
                        <td>gutkowski.elda@jacobs.com</td>
                        <td>SY</td>
                    </tr>
                    <tr>
                        <td>Block and Sons</td>
                        <td>France</td>
                        <td>lueilwitz.katharina@fahey.com</td>
                        <td>RW</td>
                    </tr>
                    <tr>
                        <td>Spinka, Ritchie and Mosciski</td>
                        <td>Greece</td>
                        <td>gorczany.gianni@harvey.com</td>
                        <td>DM</td>
                    </tr>
                    <tr>
                        <td>Gutmann, Zieme and Beatty</td>
                        <td>Oman</td>
                        <td>trystan97@bosco.biz</td>
                        <td>RE</td>
                    </tr>
                    <tr>
                        <td>Rutherford Inc</td>
                        <td>Chad</td>
                        <td>bonita.pacocha@feil.info</td>
                        <td>DM</td>
                    </tr>
                    <tr>
                        <td>Little-Douglas</td>
                        <td>Korea</td>
                        <td>kailyn09@nienow.biz</td>
                        <td>CK</td>
                    </tr>
                    <tr>
                        <td>Lakin, Bruen and Jakubowski</td>
                        <td>Singapore</td>
                        <td>karine.nader@raynor.info</td>
                        <td>NL</td>
                    </tr>
                    <tr>
                        <td>Abernathy Group</td>
                        <td>Azerbaijan</td>
                        <td>linda.torphy@west.com</td>
                        <td>SX</td>
                    </tr>
                    <tr>
                        <td>Schinner, Torphy and Keebler</td>
                        <td>Cuba</td>
                        <td>schaefer.arielle@lynch.net</td>
                        <td>KI</td>
                    </tr>
                    <tr>
                        <td>Bechtelar-Wisoky</td>
                        <td>Burundi</td>
                        <td>nswift@jones.com</td>
                        <td>LB</td>
                    </tr>
                    <tr>
                        <td>Kohler, Rutherford and Monahan</td>
                        <td>Rwanda</td>
                        <td>ludwig74@emard.info</td>
                        <td>PT</td>
                    </tr>
                    <tr>
                        <td>Huels PLC</td>
                        <td>South Georgia and the South Sandwich Islands</td>
                        <td>nbogisich@huel.com</td>
                        <td>IL</td>
                    </tr>
                </table>

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#companies').DataTable( {
                dom: 'PlQfrtip',
            });
        });
    </script>

</x-app-layout>
