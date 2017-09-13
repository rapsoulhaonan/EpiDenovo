<?php
include('header.php');
?>

<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear"> 
      <!-- ####################################################################################################### -->
      <div id="portfolio">
	  <h1 class="title">About construction of eMED</h1>
		<p>To systematically investigate the factors contributing to rhythmic gene expression in transcriptional and post-transcriptional levels, it is essential to depict rhythmic gene expression pattern with their transcriptional, post-transcriptional regulatory information by integrating published gene expression profiles, binding profiles of core clock genes and other transcriptional factors, and epigenomic regulatory factors (histone modifications and miRNA regulation).

      Herein, we constructed a freely available eMED database based on high-throughput data sets (microarray, RNA-Seq, ChIP-Seq and small-RNA-Seq) related to embryonic development in genome-wide. It is worth pointing out that we have obtained rhythmic genes at different expressed level from the collected RNA-Seq datasets (Nascent-Seq, GRO-Seq, mRNA-Seq, total-RNA-Seq and Ribo-Seq). After implementing softwares to different types of data sets, we acquired 8 classes of regulatory elements relating to control rhythmically gene expression. Further, web interface was constructed with LAMP (Linux + Apache + MySQL + PHP).

     Assuming disruption one rhythmic gene will affect its directly related genes. We select genes in regulatory network of one rhythmic gene to perform function enrichment analysis including Gene Ontology and KEGG pathway through clusterProfiler.</p>
	 <p>When users take the typical circadian gene Arntl as input in the search web interface, they will acquire rhythmic pattern and rhythmic regulatory information related to Arntl (A-F). In detail, Arntl expressed rhythmically at nascent, total, mature and ribosome binding statues; Nr1d1, Nr1d2, Hdac3, Ncor1, Ncor2, TRA2B and several lncRNAs participate in regulation of rhythmic expression of Arntl. Furthermore, regulatory information from PTHGRN is also collected to construct regulatory network of Arntl (H). At last, genes in regulatory network of Arntl are significantly enriched in embryonic development and several metabolism biology processes or pathways (I).</p>
        <ul>
          <li><img src="images/demo/420x190_1.gif" alt="" height="190" width="420">
            <center><h2>Workflow of the construction of eMED</h2></center>
          </li>
          <li class="last"><img src="images/demo/420x190_2.gif" alt="" height="190" width="420">
            <center><h2>The categray system of eMED</h2></center>
          </li>
          <li><img src="images/demo/420x190_3.gif" alt="" height="190" width="420">
            <center><h2>Rhythmic genes identify from different types of RNA-Seq</h2></center>
          </li>
          <li class="last"><img src="images/demo/420x190_4.gif" alt="" height="190" width="420">
            <center><h2>Distribution of rgulated genes in different regulatory class</h2></center>
          </li>
          <li><img src="images/demo/420x190_5.gif" alt="" height="190" width="420">
            <center><h2>Regulatory information of Arntl</h2></center>
          </li>
		  <li class="last"><img src="images/demo/420x190_6.gif" alt="" height="190" width="420">
            <center><h2>Embryo Development Process</h2></center>
          </li>
          <li><img src="images/demo/420x190_7.gif" alt="" height="190" width="420">
            <center><h2>Cell fate regulation in early mammalian development</h2></center>
          </li>
		  <li class="last"><img src="images/demo/420x190_8.gif" alt="" height="190" width="420">
            <center><h2>Blastocyst Phase Of Embyological Development</h2></center>
          </li>
          <li><img src="images/demo/420x190_9.gif" alt="" height="190" width="420">
            <center><h2>Genome-wide mapping of H3K4me3 in mouse gametes and pre-implantation embryos</h2></center>
          </li>
		  <li class="last"><img src="images/demo/420x190_10.gif" alt="" height="190" width="420">
            <center><h2>Dynamics of the histone modification landscape in early mouse embryos</h2></center>
          </li>
        </ul>
      </div>
      <!-- ####################################################################################################### -->
    </div>
  </div>
</div>

<?php
include('footer.php');
?>

