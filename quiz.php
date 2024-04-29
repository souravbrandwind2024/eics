<?php include 'partials/header.php'; ?>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<!-- breadcrumb-area-start -->
<section id="inner-top">
    <div class="container">
        <h3>question details</h3>
    </div>
</section>
<!-- breadcrumb-area-end -->
<style>
    [v-cloak] {display: none}
</style>
<div id="app" v-cloak>
<!-- mock-question-set-area-start -->
<section id="mock-test">
    <div class="mock-center">
        <div class="container">
            <div class="mock-test-question">


                <!-- After submit alert -->
                <div class="alert alert-success" role="alert" v-if="result">
                    <h4 class="alert-heading">Well done!</h4>
                    <p>You got <strong>{{result?.score}}</strong> out of 10</p>
                    <hr>
                </div>
                <!-- After submit alert -->



                <div class="mock-test-heading d-flex flex-wrap justify-content-between align-items-center">
                    <h5>Subject: <span>MBBS 3rd Professional: Endocrinology</span></h5>
                </div>

                <div class="question-box">
                    <h4>question 1</h4>
                    <p>Which gland is often referred to as the "master gland" because it regulates the functions of other endocrine glands in the body?</p>
                    <div class="form-check">
                        <label class="container-new"> Thyroid gland
                            <span v-if="result?.result.q1 === 'a'">
                                <span class="badge badge-success" v-if="ans.q1.correct === result?.result.q1"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            
                            <input type="radio" v-model="ans.q1.chosen" value="a" :checked="result?.result.q1 === 'a'" :disabled="result != null">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Pituitary gland
                            <span v-if="result?.result.q1 === 'b'">
                                <span class="badge badge-success" v-if="ans.q1.correct === result?.result.q1"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q1.chosen" value="b" :checked="result?.result.q1 === 'b'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Adrenal gland
                            <span v-if="result?.result.q1 === 'c'">
                                <span class="badge badge-success" v-if="ans.q1.correct === result?.result.q1"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q1.chosen" value="c" :checked="result?.result.q1 === 'c'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Pancreas
                            <span v-if="result?.result.q1 === 'd'">
                                <span class="badge badge-success" v-if="ans.q1.correct === result?.result.q1"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q1.chosen" value="d" :checked="result?.result.q1 === 'd'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                </div>

                <!-- <span class="first-btn click-btn">Show Answer</span>
                <div class="first-data">
                  <p class="answer-data">B) Pituitary gland</p>
                </div> -->

                <!-- <button class="btn" id="show-hidden-menu">Show Answer</button>
                <div class="hidden-menu" style="display: none;">
                  <ul>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati numquam maxime sapiente accusantium eius eos sed officiis facilis nemo. Ab nam expedita repellendus labore dignissimos officia pariatur iure illo sed reiciendis quam quos, velit, facere odit cum eos impedit at libero tempore quo nulla voluptate dolorum. Nihil dignissimos natus necessitatibus quae, molestias, quis molestiae sed tempora provident quos eaque reiciendis blanditiis fuga aliquam. Repellat, minima exercitationem perferendis mollitia in consectetur accusantium sequi asperiores! Similique molestias odio natus dolorem mollitia iusto quisquam quibusdam esse eius fugit, nostrum in! Ratione, deleniti quam optio mollitia aliquid molestias quasi cumque et iste labore, enim consectetur libero molestiae nam nemo ullam incidunt alias totam facilis eaque! Tempore quibusdam fugiat illo tempora sint veniam vero cumque!</li>
                  </ul>
                </div> -->

                <div class="question-box">
                    <h4>question 2</h4>
                    <p>Which hormone is known as the "stress hormone" because it is released in response to stress and helps the body respond to emergencies?</p>
                    <div class="form-check">
                        <label class="container-new">Insulin
                            <span v-if="result?.result.q2 === 'a'">
                                <span class="badge badge-success" v-if="ans.q2.correct === result?.result.q2"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q2.chosen" value="a" :checked="result?.result.q2 === 'a'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Estrogen
                            <span v-if="result?.result.q2 === 'b'">
                                <span class="badge badge-success" v-if="ans.q2.correct === result?.result.q2"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q2.chosen" value="b" :checked="result?.result.q2 === 'b'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Cortisol
                            <span v-if="result?.result.q2 === 'c'">
                                <span class="badge badge-success" v-if="ans.q2.correct === result?.result.q2"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q2.chosen" value="c" :checked="result?.result.q2 === 'c'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Melatonin
                            <span v-if="result?.result.q2 === 'd'">
                                <span class="badge badge-success" v-if="ans.q2.correct === result?.result.q2"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q2.chosen" value="d" :checked="result?.result.q2 === 'd'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                </div>
                <!-- <span class="second-btn click-btn">Show Answer</span>
                <div class="second-data">
                    <p class="answer-data">C) Cortisol</p>
                </div> -->

                <div class="question-box">
                    <h4>question 3</h4>
                    <p>What is the primary function of the hormone insulin in the body?</p>
                    <div class="form-check">
                        <label class="container-new">Regulating blood sugar levels
                            <span v-if="result?.result.q3 === 'a'">
                                <span class="badge badge-success" v-if="ans.q3.correct === result?.result.q3"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q3.chosen" value="a" :checked="result?.result.q3 === 'a'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Controlling body temperature
                            <span v-if="result?.result.q3 === 'b'">
                                <span class="badge badge-success" v-if="ans.q3.correct === result?.result.q3"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q3.chosen" value="b" :checked="result?.result.q3 === 'b'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Stimulating bone growth
                            <span v-if="result?.result.q3 === 'c'">
                                <span class="badge badge-success" v-if="ans.q3.correct === result?.result.q3"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q3.chosen" value="c" :checked="result?.result.q3 === 'c'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Promoting muscle strength
                            <span v-if="result?.result.q3 === 'd'">
                                <span class="badge badge-success" v-if="ans.q3.correct === result?.result.q3"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q3.chosen" value="d" :checked="result?.result.q3 === 'd'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                </div>
                <!-- <span class="third-btn click-btn">Show Answer</span>
                <div class="third-data">
                    <p class="answer-data">A) Regulating blood sugar levels</p>
                </div> -->

                <div class="question-box">
                    <h4>question 4</h4>
                    <p>Which gland is responsible for producing hormones that regulate metabolism, growth, and energy levels in the body?</p>
                    <div class="form-check">
                        <label class="container-new">Thyroid gland
                            <span v-if="result?.result.q4 === 'a'">
                                <span class="badge badge-success" v-if="ans.q4.correct === result?.result.q4"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q4.chosen" value="a" :checked="result?.result.q4 === 'a'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Adrenal gland
                            <span v-if="result?.result.q4 === 'b'">
                                <span class="badge badge-success" v-if="ans.q4.correct === result?.result.q4"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q4.chosen" value="b" :checked="result?.result.q4 === 'b'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Pineal gland
                            <span v-if="result?.result.q4 === 'c'">
                                <span class="badge badge-success" v-if="ans.q4.correct === result?.result.q4"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q4.chosen" value="c" :checked="result?.result.q4 === 'c'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Thymus gland
                            <span v-if="result?.result.q4 === 'd'">
                                <span class="badge badge-success" v-if="ans.q4.correct === result?.result.q4"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q4.chosen" value="d" :checked="result?.result.q4 === 'd'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                </div>
                <!-- <span class="fourth-btn click-btn">Show Answer</span>
                <div class="fourth-data">
                    <p class="answer-data">A) Thyroid gland</p>
                </div> -->

                <div class="question-box">
                    <h4>question 5</h4>
                    <p>Which hormone is responsible for regulating calcium levels in the blood and promoting bone health?</p>
                    <div class="form-check">
                        <label class="container-new">Estrogen
                            <span v-if="result?.result.q5 === 'a'">
                                <span class="badge badge-success" v-if="ans.q5.correct === result?.result.q5"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q5.chosen" value="a" :checked="result?.result.q5 === 'a'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Testosterone
                            <span v-if="result?.result.q5 === 'b'">
                                <span class="badge badge-success" v-if="ans.q5.correct === result?.result.q5"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q5.chosen" value="b" :checked="result?.result.q5 === 'b'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Parathyroid hormone
                            <span v-if="result?.result.q5 === 'c'">
                                <span class="badge badge-success" v-if="ans.q5.correct === result?.result.q5"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q5.chosen" value="c" :checked="result?.result.q5 === 'c'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Growth hormone
                            <span v-if="result?.result.q5 === 'd'">
                                <span class="badge badge-success" v-if="ans.q5.correct === result?.result.q5"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q5.chosen" value="d" :checked="result?.result.q5 === 'd'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                </div>
                <!-- <span class="five-btn click-btn">Show Answer</span>
                <div class="five-data">
                    <p class="answer-data">C) Parathyroid hormone</p>
                </div> -->

                <div class="question-box">
                    <h4>question 6</h4>
                    <p>What is the main function of the hormone adrenaline, also known as epinephrine?</p>
                    <div class="form-check">
                        <label class="container-new">Regulating sleep patterns
                            <span v-if="result?.result.q6 === 'a'">
                                <span class="badge badge-success" v-if="ans.q6.correct === result?.result.q6"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q6.chosen" value="a" :checked="result?.result.q6 === 'a'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Stimulating appetite
                            <span v-if="result?.result.q6 === 'b'">
                                <span class="badge badge-success" v-if="ans.q6.correct === result?.result.q6"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q6.chosen" value="b" :checked="result?.result.q6 === 'b'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Controlling blood pressure
                            <span v-if="result?.result.q6 === 'c'">
                                <span class="badge badge-success" v-if="ans.q6.correct === result?.result.q6"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q6.chosen" value="c" :checked="result?.result.q6 === 'c'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Increasing heart rate and alertness
                            <span v-if="result?.result.q6 === 'd'">
                                <span class="badge badge-success" v-if="ans.q6.correct === result?.result.q6"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q6.chosen" value="d" :checked="result?.result.q6 === 'd'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                </div>
                <!-- <span class="six-btn click-btn">Show Answer</span>
                <div class="six-data">
                    <p class="answer-data">D) Increasing heart rate and alertness</p>
                </div> -->

                <div class="question-box">
                    <h4>question 7</h4>
                    <p>Which hormone is responsible for controlling the body's internal clock and sleep-wake cycles?</p>
                    <div class="form-check">
                        <label class="container-new">Insulin
                            <span v-if="result?.result.q7 === 'a'">
                                <span class="badge badge-success" v-if="ans.q7.correct === result?.result.q7"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q7.chosen" value="a" :checked="result?.result.q7 === 'a'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Cortisol
                            <span v-if="result?.result.q7 === 'b'">
                                <span class="badge badge-success" v-if="ans.q7.correct === result?.result.q7"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q7.chosen" value="b" :checked="result?.result.q7 === 'b'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Melatonin
                            <span v-if="result?.result.q7 === 'c'">
                                <span class="badge badge-success" v-if="ans.q7.correct === result?.result.q7"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q7.chosen" value="c" :checked="result?.result.q7 === 'c'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Thyroxine
                            <span v-if="result?.result.q7 === 'd'">
                                <span class="badge badge-success" v-if="ans.q7.correct === result?.result.q7"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q7.chosen" value="d" :checked="result?.result.q7 === 'd'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                </div>
                <!-- <span class="seven-btn click-btn">Show Answer</span>
                <div class="seven-data">
                    <p class="answer-data">C) Melatonin</p>
                </div> -->

                <div class="question-box">
                    <h4>question 8</h4>
                    <p>Which gland produces the hormone progesterone, important for regulating the menstrual cycle and supporting pregnancy?</p>
                    <div class="form-check">
                        <label class="container-new">Ovary
                            <span v-if="result?.result.q8 === 'a'">
                                <span class="badge badge-success" v-if="ans.q8.correct === result?.result.q8"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q8.chosen" value="a" :checked="result?.result.q8 === 'a'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Pituitary gland
                            <span v-if="result?.result.q8 === 'b'">
                                <span class="badge badge-success" v-if="ans.q8.correct === result?.result.q8"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q8.chosen" value="b" :checked="result?.result.q8 === 'b'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Thyroid gland
                            <span v-if="result?.result.q8 === 'c'">
                                <span class="badge badge-success" v-if="ans.q8.correct === result?.result.q8"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q8.chosen" value="c" :checked="result?.result.q8 === 'c'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Pancreas
                            <span v-if="result?.result.q8 === 'd'">
                                <span class="badge badge-success" v-if="ans.q8.correct === result?.result.q8"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q8.chosen" value="d" :checked="result?.result.q8 === 'd'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                </div>
                <!-- <span class="eight-btn click-btn">Show Answer</span>
                <div class="eight-data">
                    <p class="answer-data">A) Ovary</p>
                </div> -->

                <div class="question-box">
                    <h4>question 9</h4>
                    <p>What is the primary function of the hormone estrogen in the female body?</p>
                    <div class="form-check">
                        <label class="container-new">Regulating blood sugar levels
                            <span v-if="result?.result.q9 === 'a'">
                                <span class="badge badge-success" v-if="ans.q9.correct === result?.result.q9"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q9.chosen" value="a" :checked="result?.result.q9 === 'a'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Promoting secondary sexual characteristics
                            <span v-if="result?.result.q9 === 'b'">
                                <span class="badge badge-success" v-if="ans.q9.correct === result?.result.q9"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q9.chosen" value="b" :checked="result?.result.q9 === 'b'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Controlling body temperature
                            <span v-if="result?.result.q9 === 'c'">
                                <span class="badge badge-success" v-if="ans.q9.correct === result?.result.q9"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q9.chosen" value="c" :checked="result?.result.q9 === 'c'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Stimulating bone growth
                            <span v-if="result?.result.q9 === 'd'">
                                <span class="badge badge-success" v-if="ans.q9.correct === result?.result.q9"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q9.chosen" value="d" :checked="result?.result.q9 === 'd'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                </div>
                <!-- <span class="nine-btn click-btn">Show Answer</span>
                <div class="nine-data">
                    <p class="answer-data">B) Promoting secondary sexual characteristics</p>
                </div> -->

                <div class="question-box">
                    <h4>question 10</h4>
                    <p>Which hormone is responsible for stimulating the production of red blood cells in the bone marrow?</p>
                    <div class="form-check">
                        <label class="container-new">Insulin
                            <span v-if="result?.result.q10 === 'a'">
                                <span class="badge badge-success" v-if="ans.q10.correct === result?.result.q10"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q10.chosen" value="a" :checked="result?.result.q10 === 'a'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Thyroxine
                            <span v-if="result?.result.q10 === 'b'">
                                <span class="badge badge-success" v-if="ans.q10.correct === result?.result.q10"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q10.chosen" value="b" :checked="result?.result.q10 === 'b'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Erythropoietin
                            <span v-if="result?.result.q10 === 'c'">
                                <span class="badge badge-success" v-if="ans.q10.correct === result?.result.q10"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q10.chosen" value="c" :checked="result?.result.q10 === 'c'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="container-new">Cortisol
                            <span v-if="result?.result.q10 === 'd'">
                                <span class="badge badge-success" v-if="ans.q10.correct === result?.result.q10"><i class="fas fa-check"></i> Corrent</span>
                                <span class="badge badge-danger" v-else><i class="fas fa-times"></i> Wrong</span>
                            </span>
                            <input type="radio" v-model="ans.q10.chosen" value="d" :checked="result?.result.q10 === 'd'" :disabled="result != null">
                            <span class="checkmark"></span>
                          </label>
                    </div>
                </div>
                <!-- <span class="ten-btn click-btn">Show Answer</span>
                <div class="ten-data">
                    <p class="answer-data">C) Erythropoietin</p>
                </div> -->

                <div class="submit-btn-area" data-toggle="modal" data-target="#exampleModalCenter">
                    <button v-if="result === null" @click="generateResult" type="button" class="cstm-btn">Know Your Score</button>
                    <a v-else href="//quiz" class="cstm-btn">Start New Quiz</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- mock-question-set-area-end -->

<!-- mock-question-set-submit-modal-area-start -->
<div class="quiz-modal">
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"></path>
                      </svg>
                </span>
              </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <p>Please fill out this form to view your complete score.</p>
                    <hr>
                </div>
               <div class="form-area">
                <form @submit="submit" role="form" id="quizForm" method="POST" action="/submit-quiz.php">
                    <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label for="first_name">First Name*</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name*" required>
                    </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                        </div>
                        </div>
                
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email*</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email*">
                            </div>
                            </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label for="mobile">Phone number*</label>
                        <input type="number" class="form-control" id="mobile" name="phone" placeholder="Phone number*" required>
                    </div>
                    </div>
                    <!-- <div class="col-md-12">
                        <div class="form-group">
                            <label>Address*</label>
                            <textarea placeholder="Address here" rows="3" name="address"></textarea>
                        </div>
                    </div> -->
                    <input type="hidden" name="result" v-model="result64">
                    <div class="col-md-12">
                        <div class="button-area text-center">
                            <button type="submit" class="cstm-btn">Submit</button>
                        </div>
                    </div>
                    
                    </div>
                </form>
               </div>
            </div>
          </div>
        </div>
      </div>
</div>
<!-- mock-question-set-submit-modal-area-end -->
</div>
<script>
const { createApp, ref } = Vue

createApp({
    data(){
        return {
            ans: {
                q1: {chosen: '', correct: 'b'},
                q2: {chosen: '', correct: 'c'},
                q3: {chosen: '', correct: 'a'},
                q4: {chosen: '', correct: 'a'},
                q5: {chosen: '', correct: 'c'},
                q6: {chosen: '', correct: 'd'},
                q7: {chosen: '', correct: 'c'},
                q8: {chosen: '', correct: 'a'},
                q9: {chosen: '', correct: 'b'},
                q10: {chosen: '', correct: 'c'}, 
            },
            result64: '',
            result: null
        }
    },
    methods: {
        getParam(name){
            var urlParams = new URLSearchParams(window.location.search);
            return urlParams.has(name) ? urlParams.get(name) : null;
        },
        generateResult(){
            const result = {};
            let score = 0;
            for(let i in this.ans){
                result[i] = this.ans[i].chosen
                if(this.ans[i].chosen === this.ans[i].correct){
                    score++;
                }
            }
            this.result64 = btoa(JSON.stringify({result, score}))
        },
        isValidEmail(email) {
            // Regular expression for email validation
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        },
        isValidPhoneNumber(phone) {
            // Regular expression for 10-digit numeric phone number validation
            var phoneRegex = /^\d{10}$/;
            return phoneRegex.test(phone);
        },
        submit(e){
            e.preventDefault()
            var firstName = document.getElementById('first_name').value.trim();
            var lastName = document.getElementById('last_name').value.trim();
            var email = document.getElementById('email').value.trim();
            var phone = document.getElementById('mobile').value.trim();

            if (firstName === '') {
                alert('Please enter your first name.');
                return false;
            }

            if (email === '') {
                alert('Please enter your email.');
                return false;
            } else if (!this.isValidEmail(email)) {
                alert('Please enter a valid email address.');
                return false;
            }

            if (phone === '') {
                alert('Please enter your phone number.');
                return false;
            } else if (!this.isValidPhoneNumber(phone)) {
                alert('Please enter a valid 10-digit numeric phone number.');
                return false;
            }
            document.getElementById('quizForm').submit();
        }
    },
    beforeMount(){
        const result = this.getParam('result');
        if(result){
            try{
                this.result = JSON.parse(atob(result))
            }catch(e){
                this.result = null
            }
            // console.log(this.result)
        }
    }
}).mount('#app')
</script>

<?php include 'partials/footer.php'; ?>