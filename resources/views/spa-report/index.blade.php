@extends('layouts.default')

@section('title', 'SPA Report')

@section('style')

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        .input-group-text {
            background-color: rgba(104,104,104,1.00);
            height: 2.05rem;
            font-size: 16px;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body smart">
                    <h4 class="card-title">SPA Report</h4>
                    <hr>
                    <p class="card-description"></p>
                    <h2>PROGRAMME</h2>
                    <div id="wrapper-tr">
                        <ol class="organizational-chart">
                            <li class="list">
                                <ol>
                                    <li>
                                        <div>
                                            <h2>PILLER : 01</h2>
                                        </div>
                                        <ol>
                                            <li>
                                                <div>
                                                    <h3>IMPACT : 01</h3>
                                                    <p>110 million people’s health, literacy, livelihood security, and social justice status enhanced, and contribute to Bangladesh’s progress towards SDG attainment.</p>
                                                </div>
                                                <ol>
                                                    <li>
                                                        <div>
                                                            <h4>Impact Indicator 1.1</h4>
                                                            <p>Reduce extreme poverty headcount ratio to 8.9%, in line with SDG1 goal for 2030 and Government of Bangladesh’s Seventh five-year plan </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <h4>Impact Indicator 1.2</h4>
                                                            <p>% underweight among under-five children is reduced, in line with SDG2 and Government of Bangladesh’s Seventh five-year plan </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <h4>Impact Indicator 1.3</h4>
                                                            <p>Decrease in prevalence of stunting to 25%, in line with SDG2 and Government of Bangladesh’s Seventh five-year plan </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <h4>Impact Indicator 1.4</h4>
                                                            <p>Decrease in adolescent fertility rate (age: 10-19), in line with SDG3</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <h4>Impact Indicator 1.5</h4>
                                                            <p>Decrease in Infant Mortality Rate (IMR), in line with SDG3</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <h4>Impact Indicator 1.6</h4>
                                                            <p>a. Households’ income among BRAC programme participants increased by 5% per year

                                                                b. Proportion of people in BRAC programme areas, especially women and girls, who demonstrate capability to read, write and make decisions for their lives, increased by 5% above the national average

                                                                c. 5% increase in selected agricultural crop productivityper year among BRAC supported farmers.

                                                                d) # of people with increased food and nutrition security.</p>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li>
                                                <div>
                                                    <h3>IMPACT : 02</h3>
                                                    <p>20 million of the most underserved and disenfranchised women (including girls and the disabled) empowered in Bangladesh (to gain greater access to and control over resources, decisions and actions that affect their lives </p>
                                                </div>
                                                <ol>
                                                    <li>
                                                        <div>
                                                            <h4>Impact Indicator 2.1</h4>
                                                            <p># of women in BRAC-supported households demonstrating ability to control how their own incomeand family resources are used increased by 5% per year (agency level changes)—capability, competence, confidence</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <h4>Impact Indicator 2.2</h4>
                                                            <p># of women aged 15-49 in BRAC supported households who make their own informed decisions regarding sexual relations, contraceptive use and reproductive health care (relational), aligned with SDG5</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <h4>Impact Indicator 2.3</h4>
                                                            <p>Proportion of women experiencing intimate partner violence decreased by 10% by 2020 over baseline in 2015 BBS survey</p>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li>
                                                <div>
                                                    <h3>OUTCOME : 01</h3>
                                                    <p>400,000 households graduated from ultra poverty, based on specific graduation indicators, between 2016 and 2020.</p>
                                                </div>
                                                <ol>
                                                    <li>
                                                        <div>
                                                            <h4>Outcome Indicator : 1.1</h4>
                                                            <p>Number (and %) of enrolled households graduating from extreme poverty on the basis of specific graduation criteria between 2016 and 2020.</p>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li>
                                                <div>
                                                    <h3>OUTCOME : 02</h3>
                                                    <p>A diversified, and client-centric, risk-reduced package of financial services adopted by 6 million families living in poverty, enhancing financial inclusion and livelihood security. </p>
                                                </div>
                                                <ol>
                                                    <li>
                                                        <div>
                                                            <h4>Outcome Indicator : 2.1</h4>
                                                            <p># of households actively using client-centric package of multiple financial products/services.</p>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li>
                                                <div>
                                                    <h3>OUTCOME : 03</h3>
                                                    <p>Children and adolescents graduating with better learning outcome from high-quality BRAC schools between 2016 - 2020.</p>
                                                </div>
                                                <ol>
                                                    <li>
                                                        <div>
                                                            <h4>Outcome Indicator : 3.1</h4>
                                                            <p>% difference in the pass rate of the national standard exams (PECE, JSC, SSC) achieved in BRAC and BRAC supported schools, compared to the national average (disaggregate by exam type, e.g. PECE, JSC and SSC)</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <h4>Outcome Indicator : 3.2</h4>
                                                            <p>3.2A  % of children and adolescent in the BRAC education programme that are girls

                                                                3.2B % of students graduated from BRAC operated and BRAC supported schools that are girls</p>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </div>
                    <button class="btn btn-primary mrbtn" id="next">Show More</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            var list = $(".list li");
            var numToShow = 8;
            var button = $("#next");
            var numInList = list.length;
            list.hide();
            if (numInList > numToShow) {
                button.show();
            }
            list.slice(0, numToShow).show();

            button.click(function(){
                var showing = list.filter(':visible').length;
                list.slice(showing - 1, showing + numToShow).fadeIn();
                var nowShowing = list.filter(':visible').length;
                if (nowShowing >= numInList) {
                    button.hide();
                }
            });

        });
    </script>
@endsection
