<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="js/jquery.min.js"></script> 
    <script type="text/javascript">
	var web3 = new Web3(new Web3.providers.HttpProvider("http://127.0.0.1:8545"));
	console.log(web3);
	var blocknumber= web3.eth.blockNumber;
	 console.log(blocknumber);
	//var blockdata = web3.eth.getBlock(blocknumber);
	//console.log(blockdata);
	// var transactioncount= web3.eth.getTransactionCount(blocknumber);
    
    // console.log(transactioncount);
	</script>
</head>
<body>

</body>
</html>