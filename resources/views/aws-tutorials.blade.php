@extends('layout.app')
@section('content')

    <main id="main">

        <section class="awssection">
            <div class="container">
                <div>
                    <h2> AWS基礎(サービス公開) </h2>
                    <p style="word-spacing: 10px;">
                        Welcome to the Chainer tutorial.

                        This tutorial is an online learning material for undergraduate students and those who want to
                        understand how and how to use machine learning and
                        <strong>deep learning </strong>.

                        Applying machine learning to the basics of coding using the Python
                        <strong>programming language</strong>, basic theory of machine learning and deep learning, image
                        recognition and natural language processing, etc. It covers a wide range of topics, from method to
                        method.

                       This tutorial is enriched with materials so that those who are interested in machine learning and
                        deep learning can start with the minimum required math and programming knowledge.

                        Therefore, it is created with the aim of being able to get into machine learning and deep learning
                        only with this site without looking for textbooks and materials other than this site as much as
                        possible. This site is aimed at beginners so that they can start learning without hesitation, "Why
                        should I start learning?"

                        Another feature of this tutorial is that the code that appears in the material can be executed on
                        the browser as it is by using the service called <strong>Google Colaboratory</strong> .

                        If you can write the code only in the browser, execute it, and check the result, you do not need to
                        build the environment on your computer to execute the sample code used for explanation and check the
                        result.

                        In this chapter, first, we will explain how to use this service called
                        <strong>Google Colaboratory </strong>.
                    </p>
                </div>

                <div id="awssection1">
                    <h4> 1.テスト </h4>
                    <p>Google account (If you do not have one, please create one here: Google account creation )

                        Web browser (Google Colaboratory works on most major browsers. It has been tested on PC versions of
                        Chrome and Firefox.)
                    </p>
                </div>

                <div id="awssection2">
                    <div>
                        <h4> 2.テスト </h4>
                        <p>Google Colaboratory (Colab) is a Google web service that provides a Jupyter Notebook environment
                            in the cloud . Jupyter Notebook is an open source web application that allows you to mainly do
                            the following on a browser and is widely used in the field of data analysis, research, and
                            education.


                            Add description such as notes and explanations using markup language for writing sentences
                            called Markdown

                            Colab can use GPU for free, but its runtime will disappear in up to 12 hours , so you will need
                            to prepare a separate environment for long-running processing. At the beginning of learning,
                            most of the processing is completed in a few minutes to a few hours, so there is no need to
                            worry, but if you want to use it in earnest, use a paid cloud service to prepare the
                            environment. Let's do it.

                            The basic usage is explained below.</p>
                    </div>

                </div>

                <div id="awssection3">
                    <h4> 3.テスト </h4>
                    <p>The Jupyter Notebook on Colab is henceforth referred to simply as the notebook .

                        Notebooks can have blocks called cells . Immediately after creating a new notebook, there is only
                        one blank cell. You can select a cell by clicking anywhere inside the cell.

                        There are two types of cells : code cells and text cells . Code cells are cells for writing and
                        executing Python code, and text cells are cells for writing text in Markdown format.

                        Let's take a closer look at each cell type.</p>

                </div>
        </section>

        <div class="container page">
            <a href="{{ url('/laravel') }}" class="btn prev">Previous</a>
            <!-- <a href="{{ url('/detail') }}" class="btn float-right">Next</a> -->
        </div>
    </main>
    <footer id="detail-footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>iPortfolio</span></strong>
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
@endsection


