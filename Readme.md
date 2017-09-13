## EpiDenovo: a database of functional de novo mutations involved in embryonic epigenetic regulation

[![GitHub release](https://img.shields.io/badge/EpiDenovo-release%20V1.1-brightgreen.svg)](https://github.com/rapsoulhaonan/EpiDenovo/releases)

## What is EpiDenovo?
<dl>
<dd>
EpiDenovo is a database for annotation of the associations between embryonic epigenomes and DNMs in developmental disorders, including several neuropsychiatric disorders and congenital heart disease. EpiDenovo provides an easy-to-use web interface allowing users rapidly to find the epigenetic signatures of DNMs and the expression patterns of the genes that they regulate during embryonic development. In summary, EpiDenovo is a useful resource for selecting candidate genes for further functional studies in embryonic development of human and mouse, and for investigating DNMs causing or underlying developmental disorders of human.
</dd>
</dl>

## Data processing and data content of EpiDenovo
<dl>
<dd>
The information of embryonic epigenetic regulation was achieved from GEO (1). As shown in Figure 1, EpiDenovo hosts de novo mutations that potentially influence epigenetic regulation during embryonic development. EpiDenovo integrates embryonic epigenomes and transcriptomes to understand the mechanisms involved in the DNM regulatory elements orchestrating gene expression during embryonic development. In addition, EpiDenovo provided association of de novo mutations with developing diseases by retrieving denovo-db (2). The principal advantages of EpiDenovo, compared to other databases, for the annotation of functional variants are as follows: 
i.	It contains the most comprehensive collection of ChIP-seq, ATAC-seq, DNase-seq and Hi-C data with respect to the chromatin state during embryonic development for both humans and mice.
ii.	It has the potential to contribute to research, not only on embryonic development, but also on developmental diseases, as it provides the association of DNMs with the transcriptome and epigenome during embryonic development in human developmental disorders. 
iii.	It employs a statistical scoring system to annotate and prioritize the DNMs involved in epigenetic regulation during embryonic development. 
iv.	It provides an in-depth annotation of the genes of interest by performing weighted gene co-expression network analysis and functional enrichment analysis. 
v.	It provides motif enrichment in peaks of epigenetic factor for each experiment to predict the potential binding of transcription factors by similarity of binding motif. 
</dd>
</dl>

## 
<dl>
<dd>
Gene expression changes drastically during the generation of oocytes and sperm in mammals, and halts completely by the time these cells are fully mature. In mice, expression resumes shortly after fertilization, with a minor wave of gene activation (dubbed zygotic genome activation; ZGA). A second, major wave of ZGA occurs at the late two-cell stage, marking deployment of the developmental gene-expression program. Four divisions later, a cell population called the inner cell mass develops. These cells will form the embryo proper, and can be extracted to derive embryonic stem (ES) cells in vitro. The epigenomic state of ES cells has been thoroughly investigated, but that of earlier developmental stages has remained elusive, mostly owing to the minimal amount of material available for study.
</dd>
</dl>

## 

![graph](images/demo/slider/workflow1.png)

## 
<dl>
<dd>
Gene expression changes drastically during the generation of oocytes and sperm in mammals, and halts completely by the time these cells are fully mature. In mice, expression resumes shortly after fertilization, with a minor wave of gene activation (dubbed zygotic genome activation; ZGA). A second, major wave of ZGA occurs at the late two-cell stage, marking deployment of the developmental gene-expression program. Four divisions later, a cell population called the inner cell mass develops. These cells will form the embryo proper, and can be extracted to derive embryonic stem (ES) cells in vitro. The epigenomic state of ES cells has been thoroughly investigated, but that of earlier developmental stages has remained elusive, mostly owing to the minimal amount of material available for study.
</dd>
</dl>

##
<dl>
<dd>
Histone modification reprogramming is more complex than DNA methylation and no general model can be drawn from the accessible experimental data so far. However, similar to DNA methylation, histone modification changes dynamically during preimplantation development in stage- and cell type-specific manners, which are required for the precise regulation of gene expression. As participants in histone modification, the histone acetylases and deacetylases are also involved in chromatin remodeling and help to pave the path for various factors to the DNA..
</dd>
</dl>

## 
<dl>
<dd>
The four current studies analysed the regions of the genome with which three histone modifications are associated in sperm and oocytes and in early mouse embryos. The authors adapted techniques to allow the analysis of just a few cells. First, Liu et al. (5), Dahl et al. (6) and Zhang et al. (7) studied modification of the amino-acid residue lysine 4 (K4) on histone H3 by three methyl groups (a modification referred to as H3K4me3). Second, Dahl et al. and Wu et al.4 examined modification of lysine 27 (K27) by an acetyl group (H3K27ac). Third, Liu et al. and Wu et al. analysed trimethylation of K27 (H3K27me3). The studies differed in the number of cells analysed and how the DNA and associated proteins (collectively called chromatin) were treated before analysis, but the groups all reached similar conclusions.
</dd>
</dl>

## 
<dl>
<dd>
In ES cells and mature cell types, H3K4me3 is primarily clustered around small DNA regions at which gene transcription begins, and is associated with gene activity. One of the most striking findings of the current papers is that, in oocytes, H3K4me3 is enriched at low levels across large genomic regions, spanning more than 10 kilobases, and is mostly distant from transcription start sites. This pattern of 'non-canonical' H3K4me3 persists in the fertilized oocyte and in embryos at the early two-cell stage.
</dd>
</dl>

##
<dl>
<dd>
Liu et al. found that the number of regions that contain canonical H3K4me3 but not H3K27me3 increased sharply at the late two-cell stage. By contrast, the number of H3K27me3-only regions increased gradually (Fig. 2). This probably reflects different dynamics, and hence different mechanisms, in establishing these two epigenetic marks. H3K4me3 and H3K27me3 are mutually exclusive up to the 16-cell stage, possibly because of the low levels of H3K27me3. By contrast, ES cells contain many domains marked by both such histone modifications. Thus, bivalent domains of modification are established at later stages of development. By having both 'active' and 'repressive' modifications, bivalent domains are thought to be crucial for the efficient expression of lineage-specific developmental programs as cells start to differentiate into mature lineages.
</dd>
</dl>

## 

![graph](images/demo/slider/Fig2.jpg)

##

<dl>
<dd>
Finally, Dahl et al. found stage-specific H3K27ac domains (6), which are presumed to activate the expression of nearby genes. H3K27ac domains tended to be near genes associated with ZGA, and the authors used the domains to identify transcription factors that potentially bind to these nearby genes to regulate early, stage-specific developmental programs. Further work will be required to determine the specific details of the mechanisms by which these transcription factors drive development.
</dd>
</dl>

## References
<dl>
  1.	Barrett, T., Wilhite, S.E., Ledoux, P., Evangelista, C., Kim, I.F., Tomashevsky, M., Marshall, K.A., Phillippy, K.H., Sherman, P.M., Holko, M. et al. (2013) NCBI GEO: archive for functional genomics data sets-update. Nucleic Acids Res, 41, D991-D995.
2.	Turner, T.N., Yi, Q., Krumm, N., Huddleston, J., Hoekzema, K., HA, F.S., Doebley, A.L., Bernier, R.A., Nickerson, D.A. and Eichler, E.E. (2017) denovo-db: a compendium of human de novo variants. Nucleic Acids Res, 45, D804-D811.
3.	Dobin, A., Davis, C.A., Schlesinger, F., Drenkow, J., Zaleski, C., Jha, S., Batut, P., Chaisson, M. and Gingeras, T.R. (2013) STAR: ultrafast universal RNA-seq aligner. Bioinformatics, 29, 15-21.
4.	Krzywinski, M., Schein, J., Birol, I., Connors, J., Gascoyne, R., Horsman, D., Jones, S.J. and Marra, M.A. (2009) Circos: An information aesthetic for comparative genomics. Genome Res, 19, 1639-1645.
5.	Wu, J., Huang, B., Chen, H., Yin, Q., Liu, Y., Xiang, Y., Zhang, B., Liu, B., Wang, Q., Xia, W. et al. (2016) The landscape of accessible chromatin in mammalian preimplantation embryos. Nature, 534, 652-657.
6.	Li, H., Handsaker, B., Wysoker, A., Fennell, T., Ruan, J., Homer, N., Marth, G., Abecasis, G., Durbin, R. and Proc, G.P.D. (2009) The Sequence Alignment/Map format and SAMtools. Bioinformatics, 25, 2078-2079.
7.	Chiang, C., Layer, R.M., Faust, G.G., Lindberg, M.R., Rose, D.B., Garrison, E.P., Marth, G.T., Quinlan, A.R. and Hall, I.M. (2015) SpeedSeq: ultra-fast personal genome analysis and interpretation. Nature Methods, 12, 966-968.
8.	Ramirez, F., Dundar, F., Diehl, S., Gruning, B.A. and Manke, T. (2014) deepTools: a flexible platform for exploring deep-sequencing data. Nucleic Acids Res, 42, W187-W191.
9.	Quinlan, A.R. and Hall, I.M. (2010) BEDTools: a flexible suite of utilities for comparing genomic features. Bioinformatics, 26, 841-842.
10.	Feng, J.X., Liu, T., Qin, B., Zhang, Y. and Liu, X.S. (2012) Identifying ChIP-seq enrichment using MACS. Nat Protoc, 7, 1728-1740.
11.	Heinz, S., Benner, C., Spann, N., Bertolino, E., Lin, Y.C., Laslo, P., Cheng, J.X., Murre, C., Singh, H. and Glass, C.K. (2010) Simple Combinations of Lineage-Determining Transcription Factors Prime cis-Regulatory Elements Required for Macrophage and B Cell Identities. Mol Cell, 38, 576-589.
12.	Yevshin, I., Sharipov, R., Valeev, T., Kel, A. and Kolpakov, F. (2017) GTRD: a database of transcription factor binding sites identified by ChIP-seq experiments. Nucleic Acids Res, 45, D61-D67.
13.	Servant, N., Varoquaux, N., Lajoie, B.R., Viara, E., Chen, C.J., Vert, J.P., Heard, E., Dekker, J. and Barillot, E. (2015) HiC-Pro: an optimized and flexible pipeline for Hi-C data processing. Genome Biol, 16.
14.	Imakaev, M., Fudenberg, G., McCord, R.P., Naumova, N., Goloborodko, A., Lajoie, B.R., Dekker, J. and Mirny, L.A. (2012) Iterative correction of Hi-C data reveals hallmarks of chromosome organization. Nat Methods, 9, 999-1003.
15.	Teng, L., He, B., Wang, J.H. and Tan, K. (2015) 4DGenome: a comprehensive database of chromatin interactions. Bioinformatics, 31, 2560-2564.
16.	Pertea, M., Pertea, G.M., Antonescu, C.M., Chang, T.C., Mendell, J.T. and Salzberg, S.L. (2015) StringTie enables improved reconstruction of a transcriptome from RNA-seq reads. Nature Biotechnology, 33, 290-+.
17.	Liao, Y., Smyth, G.K. and Shi, W. (2014) featureCounts: an efficient general purpose program for assigning sequence reads to genomic features. Bioinformatics, 30, 923-930.
18.	Liao, Y., Smyth, G.K. and Shi, W. (2013) The Subread aligner: fast, accurate and scalable read mapping by seed-and-vote. Nucleic Acids Res, 41, e108.
19.	Robinson, M.D., McCarthy, D.J. and Smyth, G.K. (2010) edgeR: a Bioconductor package for differential expression analysis of digital gene expression data. Bioinformatics, 26, 139-140.
20.	McCarthy, D.J., Chen, Y. and Smyth, G.K. (2012) Differential expression analysis of multifactor RNA-Seq experiments with respect to biological variation. Nucleic Acids Res, 40, 4288-4297.
21.	Langfelder, P. and Horvath, S. (2008) WGCNA: an R package for weighted correlation network analysis. Bmc Bioinformatics, 9.
22.	van Dam, S., Vosa, U., van der Graaf, A., Franke, L. and de Magalhaes, J.P. (2017) Gene co-expression analysis for functional classification and gene-disease predictions. Brief Bioinform.
23.	Yu, G., Wang, L.G., Han, Y. and He, Q.Y. (2012) clusterProfiler: an R package for comparing biological themes among gene clusters. OMICS, 16, 284-287.
24.	Mao, F., Xiao, L., Li, X., Liang, J., Teng, H., Cai, W. and Sun, Z.S. (2016) RBP-Var: a database of functional variants involved in regulation mediated by RNA-binding proteins. Nucleic Acids Res, 44, D154-163.
25.	Langmead, B. and Salzberg, S.L. (2012) Fast gapped-read alignment with Bowtie 2. Nature Methods, 9, 357-U354.
26.	Buels, R., Yao, E., Diesh, C.M., Hayes, R.D., Munoz-Torres, M., Helt, G., Goodstein, D.M., Elsik, C.G., Lewis, S.E., Stein, L. et al. (2016) JBrowse: a dynamic web platform for genome visualization and analysis. Genome Biol, 17.

</dl>
