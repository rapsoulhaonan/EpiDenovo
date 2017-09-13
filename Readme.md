## Epigenetic regulation in early mammalian development

[![GitHub release](https://img.shields.io/badge/EpiDenovo-release%20V1.1-brightgreen.svg)](https://github.com/rapsoulhaonan/EpiDenovo/releases)

Starting from fertilization and ending with implantation, preimplantation embryo development can be divided into several well-orchestrated stages: fertilization, cell cleavage, morula and blastocyst formation. During these stages, maternal and zygotic epigenetic factors play crucial roles. The gene expression profile is changed dramatically, chromatin is modified and core histone elements undergo significant changes. Each preimplantation embryo stage has its own characteristic epigenetic profile, consistent with the acquisition of the capacity to support development. Moreover, histone modifications such as methylation and acetylation as well as other epigenetic events can act as regulatory switches of gene transcription. Because the epigenetic profile is largely related to differentiation, epigenetic dysfunction can give rise to developmental abnormalities. Thus, epigenetic profiling of the embryo is of pivotal importance clinically. Furthermore, genome-wide association studies (GWAS) consistently show that a substantial proportion of genetic risk for common disease falls within regions exhibiting chromatin accessibility in disease-relevant tissues or cell types. Given the importance of these aspects, this platform eMED (Fig. 1) mainly focuses on the epigenetic profiles of transcription factors and chromatin states during preimplantation embryo development, as well as interactions between epigenetic and genetic regulation in these early developmental stages. Understanding the stages of preimplantation development and the underlying regulatory molecular mechanisms is of pivotal importance for basic reproductive biology and for practical applications including regenerative medicine.

## 

Over a million DNA regulatory elements have been cataloged in the mammalian genome, but it remains challenging for linking these elements to the genes that they regulate in the process of early embryo development. We developed eMED, a statistical platform that connects regulatory elements and chromatin state to target genes using big data of high-throughput sequencing and state-of-the-art methods of deep learning. We curated 1,768 high-throughput sequencing datasets for mammalian embryonic development from Gene Expression Omnibus (GEO). These datasets include data from RNA-seq/miRNA-seq, ChIP-seq, ATAC-seq, Hi-C and Dnase-seq/FAIRE-seq. Moreover, we employ four deep learning methods to reanalyze the chromatin features based on the peaks called by MACS. These state-of-the-art methods of deep learning include DeepSEA (1), DeepBind (2), deltaSVM (3) and Epigram (4). We apply eMED to investigate how thousands of dynamically accessible elements orchestrate gene regulation in mammalian early embryo development. Overall, we spare no effort to interpret the epigenetic regulation involved in drastic epigenetic remodeling process in oocytes and sperm, and at early stages of embryonic development. 

## 

Gene expression changes drastically during the generation of oocytes and sperm in mammals, and halts completely by the time these cells are fully mature. In mice, expression resumes shortly after fertilization, with a minor wave of gene activation (dubbed zygotic genome activation; ZGA). A second, major wave of ZGA occurs at the late two-cell stage, marking deployment of the developmental gene-expression program. Four divisions later, a cell population called the inner cell mass develops. These cells will form the embryo proper, and can be extracted to derive embryonic stem (ES) cells in vitro. The epigenomic state of ES cells has been thoroughly investigated, but that of earlier developmental stages has remained elusive, mostly owing to the minimal amount of material available for study.

### Fig. 1 Data processing workflow of eMED

![graph](images/demo/slider/workflow1.png)

## API Reference

Depending on the size of the project, if it is small and simple enough the reference docs can be added to the README. For medium size to larger projects it is important to at least provide a link to where the API reference docs live.

## Tests

Describe and show how to run the tests with code examples.

## Contributors

Let people know how they can dive into the project, include important links to things like issue trackers, irc, twitter accounts if applicable.

## License

A short snippet describing the license (MIT, Apache, etc.)
