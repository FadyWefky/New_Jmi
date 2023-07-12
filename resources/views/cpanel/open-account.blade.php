@extends('cpanel.layout')
@section('content')
<style>
  *{font-weight: normal ;font-size: 14px;}
  .left{text-align: left;}
  .head
  {

    background-color: #4f81bd;
    font-weight: bold;
    text-align: left;
    padding: 10px 15px;
    color: white;
    border-radius: 10px;
    width: 331px;
    font-size: 20px;
  }
  #logo img{width:50%;max-width: 300px;margin-top: 10px;}
  .boldText
  {
    font-weight: bold;
    font-size: 16px;
  }
  .big{font-size: 16px;}
  .blue{color:#4f81bd;font-size: 16px;}
  .hr{border-top: 2px dashed #4f81bd;width: 70%;border-bottom: 0px;margin: 40px auto;}
  .bold{font-weight: bold;}
  #bottomUl li{font-weight: bold; list-style-type: none;margin-top: 5px;}
  #bottomUl{padding: 0px;}
  li span , li span a{color: #4f81bd; font-weight: bold;}
  .footer
  {
    display: flex;
    flex-direction: row-reverse;
    align-items: center;
  }
  .footer .social
    {
      display: flex;
      flex-direction: column;
      align-items: center;

    }
    .footer ul
    {
      margin-top: 5px;
      padding: 0px;
    }
    .footer li
    {
      float: left;
      list-style-type: none;

    }
    .footer li img
    {
          width: 40px;
          margin: 0px 5px;
    }
    .footer h3
    {
      font-size: 20px;
      margin:  5px;;
      font-weight: bold;
      color: #85898b;
    }
    .footer .web img
    {
      width: 60px;
      margin-left: 10px;
    }
    @media only screen and (max-width: 768px) {

      .footer h3
      {
        font-size: 15px !important;
      }
      .footer li img
      {
        width: 28px !important;
      }
      .footer .web img
      {
        width: 50px !important;
        margin-left: 8px !important;
      }
      .head{width: 256px;
    font-size: 15px;}
    }
</style>

<style>
        #main-section-6 #section-6-title h1{font-size: 42px;font-weight: bold;font-family: Roboto-Bold;color: #0059b2;}
        #main-section-6 .package{height: auto;padding: 30px 4px; margin:4px; background: #eeeeee;color:#0059b2;}
        #main-section-6 .package h4{font-family: 'Roboto-Bold'; font-size: 24px;text-transform: uppercase;}
        #main-section-6 .package .title{text-transform: uppercase; font-family: Roboto-Bold; font-weight: 600; font-size: 17px;margin-bottom: 0px;}
        #main-section-6 .package .desc{text-transform-: uppercase;}
        #main-section-6 .package .uk-button{text-transform: uppercase; background: #0059b2; color: #ffc926; border-radius: unset; font-weight: bold;}
        #main-section-6 .package .price{text-transform: uppercase; background: #0059b2; color: #ffc926; padding: 3px 10px; border-radius: 20px; margin-left: 10px;display: inline-block;}
        #main-section-6 .package .minimum{text-transform: uppercase;}
        #main-section-6 .package hr{border-top: 1px solid #cacaca;}
        #main-section-6 .package .package-features-list li{font-weight: 700; list-style-type: none; padding: 5px 0px;}
        #main-section-6 .package .package-features-list li .fa{padding-right: 10px; float: left; height: 24px; }
        #main-section-6 .package-features-list.package-features-list2{margin-bottom: 50px; padding-left: 4px;}
        .panel-body{padding:15px 0px !important;}
        .panel {padding: 0px;}
        #main-section-6 .package .minimum , #main-section-6 .package .desc , #main-section-6 .package .package-features-list li
        {font-size: 12px;}
        #main-section-6 .package .price {padding: 3px 4px ; margin-left: 4px;}
        #main-section-6 .package .title{font-size: 12px;}
        #main-section-6 .package:hover{background: #0059b2;color: #fff;}
        #main-section-6 .margin-top-10{padding:0px;}
        #main-section-6 .margin-top-10:hover{color:#eeeeee;animation-name: fade_slide; animation-duration: 1.5s;}
        #main-section-6 .margin-top-10:hover .price{text-transform: uppercase; background: #ffc926; color: #0059b2;  border-radius: 20px;}
        #main-section-6 .margin-top-10:hover .title{text-transform: uppercase;  color: #ffc926;}
        #main-section-6 .margin-top-10:hover .uk-button{ text-transform: uppercase; background: #ffc926; color: #0059b2; border-radius: unset;}
        #main-section-6 .package .uk-button{position: absolute; right: 20px; bottom: 20px; left: 20px; border:none;cursor: pointer;padding: 14px 27px; display: flex; justify-content: center; font-size: 12px;}

        @media only screen and (max-width: 768px)
        {
            #main-section-6 .package{height: 500px;}
        }
        @media only screen and (max-width: 500px)
        {
            .margin-top-10{width:100% !important;}
            #main-section-6 .package{height: auto;}
        }
        </style>


    <div class="col-lg-9 col-md-12 col-sm-12 mainContent">
       <div class="panel panel-default">
            <div class="panel-heading">
                    <h4 class="panel-title">{{ $title}}</h4>
            </div>





            <div class="panel-body" id="panel-body" >

              <!--start content -->



        <hr />
        <div>

@if($user->country =='' )
    <div class="alert alert-warning"  >
       To Open Account You Have To Complete Your <a href="/en/cpanel/profile">Profile</a>
    </div>


@endif

@if(count($documents)< 1)
    <div class="alert alert-warning"  id="live-alert" style-="display: none;">
       To Open Account You Must Have 1 Approved <a href="/en/cpanel/documents"> Documents</a>
    </div>

@endif

@if(count($documents)>1)
    @if($documents[0]->status==0 && $documents[1]->status==0)
        <div class="alert alert-warning "  id="live-alert" style-="display: none;">
           To Open Account You Must Have 2 Approved <a href="/en/cpanel/documents"> Documents</a>
        </div>
    @endif
@endif

@if(count($documents)>1)
<?PHP $x=0; ?>
    @foreach($documents as $document)
        @if($document->type==8)
        <?PHP $x=1; ?>
        @endif
    @endforeach


@endif

@if (count($live_accounts)>9)
    <div class="alert alert-warning " id="live-alert" style="display: none;" >
       You have reached the maximum allowed number (10) of live accounts
    </div>
@endif


@if (session('status-success'))
    <div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('status-success') }}
    </div>
@endif

@if (session('status-error'))
    <div class="alert alert-danger">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('status-error') }}
    </div>
@endif

@if ($errors->any())
  @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
         {{ $error }}
     </div>
    @endforeach
@endif



<?PHP if($customer_agreement == null){ ?>
  {!! Form::open(['url'=>'en/cpanel/post-agreement'])  !!}

  <div class="row" id="agreement-row" >


  <div style="height: 300px;overflow-y: scroll;margin: 10px 20px;padding: 10px;">

    <style>.bold{font-weight: bold;}.left{text-align: left;}.center{text-align: center;}</style>
    <h4 class="center bold">Customer Account Agreement</h4>
    <p style="text-align:left;">

      <h5 class="bold left">
JMI Brokers LTD is licensed broker from Vanuatu Financial Services Commission as Dealers in Securities under license number 15010
      </h5>
      <h5 class="bold left">
Risk Disclosure Statement
        <h5>
      <p class="left">
      Before engaging in the products offered by JMI Brokers LTD
      </p>

      <p class="left">
you should be aware of the risks which may be involved in trading financial contracts for differences CFDs:
      </p>
      <p class="bold left">
You should not enter into a transaction unless you fully understand:
      </p>

      <li>

        The nature and fundamentals of the transaction and the market underlying such transactions.

      </li>
      <li>
           The extent of the economic risk to which you are exposed as a result of such transactions(and determine that such risk is suitable for you in light of your specific experience in relation to the transaction and your financial objectives, circumstances and resources).

        </li>
      <li>
The legal terms and conditions for such transactions.

      </li>

      <p class="left">
       You have the responsibility to fully understand the terms and conditions of the transactions to be undertaken, including, without limitation:
         </p>
      <p class="left">
      1. The terms as to price, term, and expiration date, restrictions on exercising an OTC and the terms material to the transaction.
       </p>
      <p class="left">
        2 . Any terms describing risk factors, such as volatility, liquidity, and so on.
      </p>
      <p class="left">
    3. The circumstances under which you may become obliged to make or take delivery of a Leveraged foreign exchange transaction or Futures contracts.
        </p>
      <p class="left">
        The high degree of leverage that is often obtainable in trading of the products offered by JMI Brokers LTD can work against you as well as for you, due to fluctuating market conditions.
  Trading in such instruments can lead to large losses as well as gains in response to a small market movement.
      <p class="left">
      If the market moves against you, you may not only sustain a total loss of your initial margin deposit, and any additional funds deposited with JMI Brokers LTD.

         </p>
      <p class="left">
     to maintain your position, but you may also incur further liability to JMI Brokers LTD. You may be called upon to “top-up” your margin by substantial amounts at short notice to maintain your position, failing which JMI Brokers LTD may have to liquidate your position at a loss and you would be liable for any resulting loss. You may sustain substantial losses on a contract or trade if the market conditions move against your position. It is in your interest to fully understand the impact of market movements, in particular the extent of profit/loss you would be exposed to when there is an upward or down ward movement in the relevant rates and the extent of loss if you have to liquidate a position, if market conditions move against you.

     </p>
      <p class="left">Under certain market conditions you may find it difficult or impossible to liquidate a position, to assess a fair price or assess risk exposure. This can happen, for example, where the market for a transaction is illiquid or where there is a failure in electronic or telecommunications systems, or where there is the occurrence of an event commonly known as “force majeure”. Placing contingent orders, such as “stop-loss” orders, will not necessarily limit your losses to the intended amounts, as it may be impossible to execute such orders under certain market conditions.
When placing a stop order or stop loss order, you must be aware that in certain market conditions you may be filled at a different price than initially requested. Because the prices and characteristics of over-the-counter transactions are individually negotiated and there is no central source for obtaining prices, there are in efficiencies in transaction pricing.
We consequently cannot and do not warrant that our prices or the prices we secure
    </p>


      <h5 class="bold left">1.	TRADING AUTHORIZATION</h5>
      <p class="left">JMI Brokers is a financial company authorized and holds a Principals license from Vanuatu Financial Services Commission (VFSC) as “Dealers in Securities” to carry on the business of dealing in securities such as financial Contracts for differences. (“CFDs”) in commodities, equities, indices, and Currency pairs (Fx), etc under three Licenses classes (A, B, and C) as below: Class A : CFDs in currency pairs ( Fx). Class B: CFDs in Precious Metals.
      </p>
      <p class="left">Class C: CFDs in Commodities, equities, indices,etc All CFDs contracts are leveraged products and will be executed between you as principal and us as principal.
You shall be directly and personally responsible for performing your obligations under every transaction entered in to between us, whether you are dealing as principal directly or through an agent, or as agent for another person, and you shall indemnify us in respect of all liabilities, losses or costs of any kind or nature what so ever which may be incurred by us as a direct or in direct result of any failure by you to perform any such obligation.
.</p>

      <h5 class="bold left">2.	APPLICABLE RULES AND REGULATIONS</h5>
      <p class="left">All orders entered for the purchase or sale of a Commodity Contract and all transactions in Commodity Contracts executed for Customer’s accounts shall be subject to the constitution, by Laws, rules, regulations, customs and usages (collectively “rules”) of the exchange or market, and its clearing house, if any, where such orders are directed or such transactions are executed and any applicable self- regulatory organization and to the rules and regulations promulgated there under (collectively “laws JMI Brokers LTD shall not be liable to Customer as a result of any action taken by JMI Brokers LTD or its agents in compliance with any of the foregoing rules or laws. This paragraph is solely for the protection and benefit of JMI Brokers LTD ,and any failure by JMI Brokers LTD or its agents to comply with any of the foregoing rules or laws shall not relieve Customer of any obligation under this agreement nor be construed to create rights under this agreement in favor of Customer against JMI Brokers LTD
      </p>

      <h5 class="bold left">3.	CHARGES PAYABLE BY CUSTOMER.</h5>
      <p class="left">
Customer agrees to pay (a) such commissions and service fees as JMI Brokers LTD may establish and charge from time to time; (b) the amount of any loss that may result from transactions by JMI Brokers LTD on Customer’s behalf, including any deficit balance; and(c) interest on any deficit balance and on any other amounts payable to JMI Brokers LTD under this agreement at the rate of three percent (3%) over the Prime rate in effect from time to time, or the maximum rate allowed by law, which ever is less.
      </p>

      <h5 class="bold left">4.	RISK OF LOSS</h5>
      <p class="left">

  All transactions effected for Customer’s accounts and all fluctuations in the market prices of the Commodity Contracts carried in Customer’s accounts are at Customer’s sole risk and Customer shall be solely liable under all circumstances. By execution of this agreement, Customer warrants that Customer is willing and financially able to sustain any such losses. JMI Brokers LTD is not responsible for the obligations of the persons with whom Customer’s transactions are effected, nor is JMI Brokers LTD responsible for delays in transmission, delivery or execution of Customer’s orders due to malfunctions of communications facilities or other causes.

      </p>



      <p class="left">

    JMI Brokers LTD shall not be liable to Customer for the loss of any margin deposits which is the direct or indirect result of the bankruptcy, in solvency, liquidation, receivership, custodianship or assignment for the benefit of creditors of any bank, another clearing broker, exchange, clearing organization or similar entity.

       </p>

      <h5 class="bold left">5.	TRADING RECOMMENDATIONS</h5>
      <p class="left">Customer acknowledges that any trading recommendations and market or other information</p>
      <p class="left">

    Communicated to Customer by JMI Brokers LTD , although based upon information obtained from sources Believed by JMI Brokers LTD to be reliable, may be incomplete, may not be verified, may differ from advice given to other customers, and may be changed without notice to Customer.
     Customer understands JMI Brokers LTD or one or more of its affiliates may have apposition in and buy or sell Commodity Contracts which are the subject of information or recommendations furnished to Customer and that these positions and transactions of JMI Brokers LTD or any affiliates may not be consistent with are there commendations furnished to customer.


         </p>
      <p class="left">
JMI Brokers LTD makes no representation or warranty with respect to the tax consequences of customer transactions
      </p>

      <h5 class="bold left">6.	INDEMNIFICATION</h5>
      <p class="left">
Customer hereby agrees to indemnify JMI Brokers LTD and hold JMI Brokers LTD harmless from any liability, cost or expense (including attorneys’ fees and expenses and any fines or penalties imposed by any governmental agency, contract market, exchange, clearing organization or other self-regulatory body) which JMI Brokers LTD may incur or be subjected to with respect to Customer’s account or any transaction or position there in. Without limiting the generality of the foregoing, Customer agrees to reimburse JMI Brokers LTD on demand for any cost of collection incurred by JMI Brokers LTD in collecting any sums owing by Customer under this agreement and any cost incurred by JMI Brokers LTD in successfully defending against any claims asserted by Customer, including all attorneys’ fees, interest and expenses.
          .</p>

      <h5 class="bold left">7.	RECORDING</h5>
      <p class="left">
Customer understands that all conversations regarding Customer’s accounts, orders between Customer and JMI Brokers LTD maybe recorded by JMI Brokers LTD and Customer irrevocably consents to such recordings and waives any right to object to JMI Brokers LTD ’s use of such recordings in any proceeding or as JMI Brokers LTD otherwise deems appropriate.

    </p>

      <h5 class="bold left">8.	FOREIGN CURRENCY</h5>
      <p class="left">If any transaction for Customer’s accounts is effected on any exchange or in any market on which transactions are settled in a foreign currency, any profit or loss arising as a result of a fluctuation in the rate of exchange between such currency and the United States Dollar shall be entirely for Customer’s account and at Customer’s sole risk. JMI Brokers LTD is hereby authorized to convert funds in Customer’s accounts in to and from such foreign currency at rates of exchange prevailing at the banking and other institutions with which JMI Brokers LTD normally conducts such business transactions.
.</p>



      <h5 class="bold left">9.	MARGIN REQUIREMENTS.</h5>
      <p class="left">
Customer agrees to maintain at all times without demand from JMI Brokers LTD margin requirements for the positions in the Customer’s account (s). Customer will at all times maintain such margin or collateral for Customer’s account (s) as requested from time to time by JMI Brokers LTD (which requests maybe greater than exchange and clearing house requirements). Margin deposits shall be made by wire transfer of immediately available funds, or by such other means as JMI Brokers LTD may direct, and shall be deemed made when received by JMI Brokers LTD.
</p>
      <p class="left">
JMI Brokers LTD failure at anytime to call for a deposit of margin shall not constitute a waiver of JMI Brokers LTD rights to do so at anytime there after, nor shall it create any liability of JMI Brokers LTD to Customer.
</p>

      <h5 class="bold left">10.	LIQUIDATION OF POSITIONS.</h5>
      <p class="left">

In the event that (a) Customer shall fail to timely deposit or maintain margin or any amount hereunder; (b) Customer (if an individual) shall die or be judicially declared incompetent or (if an entity) shall be dissolved or otherwise terminated; (c) a proceeding under the Bankruptcy Act, an assignment for the benefit of creditors, or an application for a receiver, custodian, or trustee shall be filed or applied for by or against Customer;(d)attachment is levied against Customer’s account; (e) the property deposited as collateral is determined by JMI Brokers LTD in its sole discretion, regardless of current market quotations, to be in adequate to properly secure the account; or (f) at anytime JMI Brokers LTD deems it necessary for its protection for any reason whatsoever, JMI Brokers LTD may, in the manner it deems appropriate, close out Customer’s open positions in whole or in part, sell any or all of Customer’s property held by JMI Brokers LTD , buy any securities, Commodity Contracts, or other property for Customer’s account, and may cancel any outstanding orders and commitments made by JMI Brokers LTD on behalf of Customer. Such sale, purchase or cancellation maybe made at JMI Brokers LTD discretion without advertising the same and without notice to Customer or his personal representatives and without prior tender, demand for margin or payment, or call of any kind upon Customer. JMI Brokers LTD may purchase the whole or any part there of free from any right of red emption. It is understood that a prior demand or call or prior notice of the time and place of such sale or purchase shall not be a waiver of JMI Brokers LTD right to sell or buy without demand or notice as here in provided. Subject to applicable laws and rules, and in order to prevent non-permitted trading in debit/deficit accounts, profits on any trades executed without JMI Brokers LTD’s express permission, for a Customer account that is debit/deficit at the time the order is placed ,shall before JMI Brokers LTD account if JMI Brokers LTD in its discretion so elects. Losses on any such trades shall be jointly and severally borne by the Introducing Broker, if any, and the Customer. Customer shall remain liable for and pay JMIBrokers LTD the amount of any deficiency in any account of Customer with JMI Brokers LTD resulting from any transaction described above. Our determination of the current market value and the amount of additional and/or variation margin shall be conclusive and shall not be challenged by the Customer.
    </p>
<!--here stop -->

      <h5 class="bold left">11.	TRADING LIMITATIONS</h5>
      <p class="left">JMI at any time, in its sole discretion, may limit the number of positions which Customer may maintain or acquire through JMI Brokers LTD , and JMI Brokers LTD is under no obligation to effect any transaction
        for Customer’s accounts which would create positions in excess of the limit which JMI Brokers LTD has set.
        </p>
      <p class="left">Customer agrees not to exceed the position limits established for any contract market, whether acting alone or with others, and to promptly advise JMI Brokers LTD if Customer is required to file any reports on positions.

     </p>

      <h5 class="bold left">12.	EXERCISES AND ASSIGNMENTS</h5>
      <p class="left">

  With regard to options transactions, Customer understands that some exchange clearing houses have established exercise requirements for the tender of exercise instructions and that options will become worth less in the event that Customer does not deliver instructions by such expiration times. At least two business days prior to the first notice day in the case of long positions in futures or forward contracts, and at least two business days prior to the last trading day in the case of short positions in open futures or forward contracts or long and short positions in options, Customer agrees that Customer will either give JMI Brokers LTD instructions to liquidate or make or take delivery under such futures or forward contracts, or to liquidate, exercise, or allow the expiration of such options, and will deliver to JMI Brokers LTD sufficient funds and/or any documents required in connection with exercise or delivery. If such instructions or such funds and/or documents, with
  regard to option transactions, are not received by JMI prior to the expiration of the option, JMI Brokers LTD may permit an option to expire. Customer also understands that certain exchanges and clearing houses automatically exercise some “in-the - money” options unless instructed otherwise, Customer acknowledges full responsibility for taking action either to exercise or to prevent exercise of an option contract, as the case maybe JMI Brokers LTD is not required to take any action with respect to an option, including without limitation any action to exercise a valuable option contract prior to its expiration or
  to prevent the automatic exercise of an option, except upon Customer’s express instructions. Customer further understands that JMI Brokers LTD also has established exercise cut-off times which maybe different from the times established by the contract markets in clearing houses. In the event that timely exercise and assignment instructions are not given, Customer hereby agrees to waive any and all claims for damage or loss Customer might have against JMI Brokers LTD arising out of the fact that an option was or was not exercised. Customer understands that JMI Brokers LTD randomly assigns exercise notices to Customers, that all short option positions are subject to assignment at anytime, including positions established on the same day that exercises areas signed, and that exercise assignment notices are allocated randomly from among all Customers’ short option positions which are subject to exercise.

      </p>


      <h5 class="bold left">13.	SECURITY AGREEMENT</h5>
      <p class="left">
    (a) All funds, securities, and other property in Customer’s accounts or otherwise now orat any time in the future held by JMI Brokers LTD for any purpose, including safekeeping, are subject to a security interest and general lien in JMI Brokers LTD ’s favor to secure any indebtedness at any time owing from Customer to JMI Brokers LTD, including any indebtedness resulting from any guarantee of a transaction or account by Customer or Customer’s assumption of joint responsibility for any transaction or account.  </p>

      <p class="left">
(b) Customer hereby grants to JMI Brokers LTD the right to pledge, repledge, or invest either separately or with the property of other Customers, any securities or other property held by JMI Brokers LTD for the account of Customer or as collateral therefore, including without limitation to any exchange or clearing house through which trades of Customer are executed. JMI Brokers LTD shall be under no obligation to pay to Customer or account for any interest income, or benefit derived from such property and funds or to deliver the same securities or other property deposited with or received by JMI Brokers LTD for Customer. JMI Brokers LTD may deliver securities or other property of like or equivalent kind or amount; JMI Brokers LTD shall have the right to offset any amounts it holds for or owes to Customer against any debts or other amounts owed by Customer to JMI Brokers LTD From time to time and without prior notice to Customer, JMI Brokers LTD may transfer interchangeably between and among any account of Customer maintained at JMI Brokers LTD any of Customer’s funds (including segregated funds), securities, or other property for purposes of margin, reduction or satisfaction of any debit balance, or any reason which JMI Brokers LTD deems appropriate. Within areas on able time after any such transfer, JMI Brokers LTD will confirm the transfer in writing to Customer.

       </p>

      <h5 class="bold left">14.	AUTHORITY TO TRANSFER ACCOUNTS</h5>
      <p class="left">
        Until further notice in writing from the undersigned, JMI Brokers LTD is hereby authorized at any time, withoutprior notice to the undersigned, to transfer from any account or accounts of the undersigned maintained at JMI Brokers LTD or any exchange member through which JMI Brokers LTD clears customer transactions, such excess funds, securities, and other property of the undersigned as in JMI Brokers LTD ’s sole judgment maybe required for margin in any other such accountor accounts or to reduce or satisfy any debit balances in any other account or accounts provided such transfer or transfers comply with relevant governmental and exchange rules and regulations applicable to the same.
JMI Brokers LTD is further authorized to liquidate any property held in any such account or accounts of the undersigned whenever, in JMI Brokers LTD ’s sole judgment, such liquidation is necessary in order to effectuate the above authorized transfer and application of property. With in areas on able time after making any such transfer or application, JMI Brokers LTD will Confirm the same in writing to the under signed.

      </p>

      <h5 class="bold left">15- Monthly Rebate</h5>
      <p class="left">
        For all both offers whether its offer number 1 Rebate + Bonus or offer number 2 1 pip back No bonus the value of Monthly Rebate should not exceed the value of original fund deposited at that month. Therefore the Maximum monthly rebate in any month is equal to sum of monthly deposits excluding bonus or any other promotions.

       </p>


      <h5 class="bold left">16.	NOTICES AND COMMUNICATIONS</h5>
      <p class="left">

    Customer shall make all payments, except with regard to wire transfers discussed above, and deliver all notices and communications to the office of JMI Brokers LTD . All communications JMI Brokers LTD to Customer maybe sent to the Customer at the address indicated on the Customer Account Application or to such other address as Customer hereafter directs in writing. Confirmations of trades, statements of account, margin calls, and any other written notices shall be binding on Customer for all purposes, unless Customer calls any error there into JMI Brokers LTD ’s attention in writing (a) prior to the start of business on the business day next following notification, in the case of margin calls and reports of executions and (b) within 24 hours of delivery to Customer, in the case of statements of account and any written notices (other than trade confirmations or margin calls)or demands. None of these provisions, however, will prevent JMI Brokers LTD upon discovery of any error or omission, from correcting it. The parties agree that such errors, whether resulting in profit or loss, will be corrected in Customer’s account, will be credited or debited so that it is in the same position it would have been in if the error had not occurred. Whenever a correction is made, JMI Brokers LTD will promptly make written or oral notification to Customer. All communications, whether by mail, telex, courier, telephone, telegraph, messenger, facsimile, or otherwise (in the case of mailed notices), or communicated (in the case of telephone notices), sent to Customer at Customer’s or agent’s address (or telephone number) as given to JMI Brokers LTD from time to time shall constitute personal delivery to Customer whether or not actually received by Customer, and Customer hereby waives all claims resulting from failure to receive such communications.

    </p>

      <h5 class="bold left">17.	PRINTED MEDIA STORAGE</h5>
      <p class="left">

        Customer acknowledges and agrees that JMI Brokers LTD may reduce all documentation evidencing Customer’s account, including the original signature documents executed by Customer in the opening of such Customer’s account with JMI Brokers LTD , utilizing a printed media storage device such as micro-fiche or optical disc imaging. Customer agrees to permit the records stored by such printed media storage method to serve as a complete, true and genuine record of such Customer’s account documents and signatures.
      </p>

      <h5 class="bold left">18.	REPRESENTATIONS</h5>
      <p class="left">

Customer represents that (a) (if an individual) he is of the age of majority, of sound mind, and authorized to open accounts and enter into this agreement and to effectuate transactions in Commodity Contracts as contemplated hereby; (b) (if an entity) Customer is validly existing and empowered to enter into this agreement and to effect transactions in Commodity Contracts as contemplated hereby; (c) the statements and financial information contained on Customer’s Account Application submitted herewith (including any financial statement there with)are true and correct; and (d) no person or entity has any interesting or control of the account to which this agreement pertains except as disclosed in the Customer’s Account Application. Customer further represents that, except as here to fore disclosed to JMI Brokers LTD in writing, he is not an officer or employee of any exchange, board of trade, clearing house, or an employee or affiliate of any futures commission merchant, or an introducing broker, or an officer ,partner, director, or employee of any securities broker or dealer. Customer agrees to furnish appropriate financial statements to JMI Brokers LTD to disclose to JMI Brokers LTD any material changes in the financial position of Customer and to furnish promptly such other information concerning Customer as JMI Brokers LTD reasonably requests.

    </p>


      <h5 class="bold left">19.	INTRODUCING BROKER</h5>
      <p class="left">
  Customer acknowledges that JMI Brokers LTD is not responsible for the conduct, representations and statements of the introducing broker or its associated persons in the handling of Customer’s account. Customer agrees to waive any claims Customer may have against JMI Brokers LTD and to indemnify and hold JMI Brokers LTD harmless for any actions or omissions of the introducing broker or its associated persons.

       </p>

      <h5 class="bold left">20.	CONFLICTS OF INTEREST</h5>
      <p class="left">

        JMI Brokers LTD may execute CFDs for Customer’s account (s) either as principal or broker.As broker, JMI Brokers LTD will execute transaction similar to Customer’s transaction with another market participant in the financial market. As principal JMI Brokers LTD may not execute transaction similar to Customer in the financial market and hold the opposing transaction in JMI Brokers LTD inventory of CFDs.
        As a result of acting as principal Customer should realize that JMI Brokers LTD maybe acting as your counter party and that JMI Brokers LTD maybe placed in such a position that a conflict of duty occurs. JMI Brokers LTD may execute Commodity Contracts for Customer’s account (s) either as principal or broker. As broker, JMI Brokers LTD will execute transaction similar to Customer’s transaction with another market participant in the financial market. As principal JMI Brokers LTD may not execute transaction similar to Customer in the financial market and hold the opposing transaction in JMI Brokers LTD inventory of Commodity Contracts. As a result of acting as principal Customer should realize that JMI Brokers LTD maybe acting as your counter party and that JMI Brokers LTD maybe placed in such a position that a conflict of duty occurs. JMI Brokers LTD , its Associates or other persons connected with JMI Brokers LTD may have an interest, relationship or arrangement that is material in relation to any Commodity Contract effected under this Agreement. By entering into this Agreement the Customer agrees that J JMI Brokers LTD may transact such business without prior reference to the Customer. In addition, JMI Brokers LTD may provide advice and other services to third parties whose interests maybe in conflict or competition with the Customer’s interests JMI Brokers LTD , its Associates and the employees of any of them may take positions opposite to the Customer or maybe in competition with the Customer to acquire the same or a similar position. JMI Brokers LTD will not deliberately favor any person over the customer but will not be responsible for any loss which may result from such competition
        JMI Brokers LTD, its Associates or other persons connected with JMI Brokers LTD may have an interest, relationship or arrangement that is material in relation to any CFDs effected under this Agreement. By entering into this Agreement the Customer agrees that JMI Brokers LTD may transact such business without prior reference to the Customer. JMI Brokers LTD , its Associates and the employees of any of them may take positions opposite to the Customer or maybe in competition with the Customer to acquire the same or a similar position. JMI Brokers LTD will not deliberately favor any person over the customer but will not be responsible for any loss which may result from such competition

    </p>

      <h5 class="bold left">21.	BINDING EFFECT OF AGREEMENT; MODIFICATIONS</h5>
      <p class="left">
  This agreement shall be binding upon and inure to the benefit of JMI Brokers LTD ,its successors and assigns, and Customer’s heirs, executors, administrators, legatees, successors, personal representatives and assigns. Except as provided in paragraph 2, no change in or waiver of any provision of this agreement shall be binding unless it is in writing, dated subsequent to the date hereof, and signed by the party intended to be bound. No agreement or understanding of any kind shall be binding upon JMI Brokers LTD unless it is agreed to in writing, accepted and signed by an authorized officer.

     </p>

      <h5 class="bold left">22.	FORCE MAJEURE EVENTS</h5>
      <p class="left bold">
      We may, in our reasonable opinion, determine that an emergency or an exceptional market condition exists (a “Force Majeure Event”). A Force Majeure Event shall include, but is not limited to, the following:

      </p>
      <li>

Any act, event or occurrence (including without limitation any strike, riot or commotion, interruption or power supply or electronic or communication equipment failure) which, in our opinion, prevents us from maintaining an orderly market in one or more of the investments in respects of which we ordinarily deal in CFDs


      <li>
The suspension or closure of any market or the abandonment or failure of any event upon which we base, or to which we in any way relate, our quote, or the imposition of limits or special or unusual terms on the trading in any such market or on any such event;

      <li>

The occurrence of an excessive movement in the level of any CFDs and/or the underlying market or our anticipation (acting reasonably) of the occurrence of such movements.
    </li>

      <p class="left bold">
        If  we determine that a Force Majeure Event exists we may in our absolute is creation without notice and at any time take one or more of the following steps:
      </p>

      <li>
Increase your deposit requirements; close any or all of your open CFDs at such closing level as we reasonably believe to be appropriate.
</li>
      <li>	Suspend or modify the application of all or any of the terms of this agreement.
to the extent that the Force Majeure Event makes it impossible or impracticable for us to comply with the term or terms in question;</li>
OR alter the last time for trading for particular CFDs.

</p>



      <h6 class="bold">3. Non-Deposited Funds</h6>
      <p class="left ">

Funds appearing on Clients’ account may include agreed or voluntary bonuses or any other sums not directly deposited by the Client or gained from trading on account of actually deposited funds (“NonDeposited Funds”). JMI Brokers LTD may provide bonuses which can be used according to the Trader Agreement. All bonus funds is fully belong to JMI Brokers LTD broker and considered as a Non-Deposited (credited) Funds and can be canceled atany time.

</p>

      <h6 class="bold">4. Withdrawing process</h6>
      <p class="left ">To withdraw your funds, you should follow several steps and rules below: Log in to your personal account.
Open withdraw tab and withdraw your funds from the trading account via your requested method.Open withdraw funds tab and fill out the fields.
<br />If the additional documents are required, we contact you within one working day. Withdrawing funds to bank accounts are possible only after depositing money through a bank.
<br />
The Company does not charge any commission. Commission based on the beneficiary’s bank.
Withdrawing process will be completed within 3-5 business days from the moment of accepting withdrawing request by the Company from the Client
.<br />
The Company does not charge any commission. Commission based on the beneficiary’s bank.
<br />
Attention! JMI Brokers LTD, in accordance with international laws on combating terrorist financing andmoney laundering, does not accept payments from third parties and payments to third parties are not carried out. JMI Brokers LTD is not liable in case of 3rd parties delays, who are not related to the company.Bank transfer takes 3-5 banking days under normal conditions.

<br />
The JMI Brokers LTD company processes withdrawals to the Visa, MasterCard, China Union Pay Cards within 1business days. But please note that under normal conditions payments go up to 6 banking days.

</p>

      <h6 class="bold">5. Additional Terms</h6>
      <p class="left ">
Please note this policy cannot be exhaustive, and additional conditions or requirements may apply at any time due toregulations and policies, including those set in order to prevent money laundering. Please note any and all usage of the site and services is subject to the Terms and Conditions, as may be amended from time to time by JMI Brokers LTD, at its sole discretion.
</p>


      <p class="left "></p>


      <h5 class="bold left">28.	ASSIGNMENT</h5>
      <p class="left ">
JMI may assign Customer’s account to another registered futures commission merchant by notifying Customer of the date and name of the intended assignee ten (10) days prior to the assignment. Unless Customer objects to the assignment in writing prior to the scheduled date for assignment, the assignment will be binding on Customer.

      </p>

      <h5 class="bold left">29.	CUSTOMER ACKNOWLEDGMENTS AND SIGNATURE</h5>
      <p class="left ">
        Customer hereby understands the Customer Account Agreement and consents and agrees to all of the terms and conditionsof the agreement set forth above. Customer acknowledges that trading in Commodity Contracts is speculative, involves ahigh degree of risk and is appropriate only for persons who can assume risk of loss in excess of their margin deposits.

        </p>
      <br />

      <h5 class="bold left">Online Access Agreement</h5>

      <p class="left">

        This agreement sets forth the terms and conditions under which we, JMI Brokers LTD ,shall permit you to have access to one or more terminals, including terminal access through your internet browser, for the electronic transmission of orders and \ or transactions, for your accounts with us.

       </p>
      <p class="left bold">

        This agreement also sets forth the terms and conditions under which we shall permit you electronically to monitor the activity, orders and\or transactions in your account (collectively, the “Online Service”). For purposes of this Agreement the term “Online Service” includes all software and communication links, and in consideration thereof, Customer agrees to the following:

         <p class="left">

      <h5 class="bold left">1.	LICENSE GRANT AND RIGHT OF USE</h5>
      <p class="left">By this Agreement, where we are supplying you with software for use with the Online Service, you may use the software solely for your own internal business purposes. Neither the software not the Online Service maybe used to provide third party training or as a service bureau for any third parties. You agree to use the Online Service and the software strictly in accordance with the terms and conditions of JMI Brokers LTD Customer Account Agreement, as amended from time to time. You also agree to be bound by any rules, procedures and conditions established by JMI Brokers LTD concerning the use of the Online Service provided by JMI Brokers LTD

      <h5 class="bold left">2.	ACCESS AND SECURITY</h5>
      <p class="left">
The Online Service maybe used to transmit, received and confirms execution of orders, subject to prevailing market conditions and applicable rules and regulations.</p>
      <p class="left bold">

JMI Brokers LTD consent to your access and use in reliance upon your having adopted procedures to prevent unauthorized access to and use of the Online Service, and in any event, you agree to any financial liability for trades executed through the Online Service. You acknowledge, represent and warrant that:

       </p>
      <li>
A) You have received a number, code or other sequence which provides access to the Online Service (the “Password”).</li>
      <li>B) You are the sole and exclusive owner of the password.</li>
      <li>C) You are the sole and exclusive owner of any identification number or Login number(the “Login”). </li>


      <li>
D) You accept full responsibility for use and protection of the Password and the Login as well as or any transaction occurring in account opened, held or accessed through the Login and \ or Password. You accept responsibility for the monitoring of your account(s).
      </li>

      <li>You will immediately notify JMI Brokers LTD in writing if you become aware of any of the following:</li>
      <li>A) Any loss, theft or unauthorized use of your Password(s), Login and\or account number(s).</li>
      <li>B) Any failure by you to receive a massage indicating that an order was received and\or executed.</li>
      <li>C) Any failure by you to receive an accurate confirmation of an execution.</li>
      <li>D) Any receipt of confirmation of an order and\or execution which you did not place.</li>
      <li>E) Any inaccurate information in your account balances, positions, or transaction history.</li

      <h5 class="bold left">3.	RISKS OF ONLINE TRADING</h5>
      <p class="left">

        Your access to the Online Service, or any portion thereof, maybe restricted or unavailable during periods of peak demands, extreme market volatility, systems upgrades or other reasons.
      </p>
      <p class="left">

      Your access to the Online Service, or any portion thereof, maybe restricted or unavailable during periods of peak demands, extreme market volatility, systems upgrades or other reasons.
      JMI Brokers LTD makes no express or implied representations or warranties to you regarding the usability, condition or operation thereof. We do not warrant that access to or use of the Online Service will be uninterrupted or error free or that the Online Service will meet any particular criteria of performance or quality. Under no circumstances including negligence, shall JMI Brokers LTD or anyone else involved in creating, producing, delivering or managing that Online Service be liable for any direct, indirect incidental, special or consequential damages that result from the use of or inability to use the Online Service, or out of any breech of any warranty, including, without limitation, those for business interruption or loss of profits. You expressly agree that your use of the Online Service is of your sole risk, you assume full responsibility and risk of loss
      resulting from use of, or materials obtained through, the Online Service, neither we nor any of our directors, officers, employees ,agents, contractors, affiliates, third party vendors, facilities, information providers, licensors, exchanges, clearing organizations or other suppliers providing data, information, or services, warrant that the Online Service will be uninterrupted or error free; nor do we make any warranty as to the results that maybe obtained from the use of the Online Service or as to the timeliness, sequence, accuracy, completeness, reliability or content of any information, service, or transaction provided through the Online Service. In the event that your access to the Online Service, or any portion thereof, is restricted unavailable, you agree to use other means to place your orders or access information, such as calling JMI Brokers LTD representative. By placing an order through the Online Service, you acknowledge that your order may not be reviewed by a registered representative prior to execution, you agree that JMI Brokers LTD is not liable to you for any losses, lost opportunities or increased commissions that may result from your inability to use the Online Service to place order or access information.

      </p>


      <h5 class="bold left">4.	MARKET DATA AND INFORMATION</h5>
      <p class="left">

        Neither we nor any provider shall be liable in any way to you or to any other person for: a) Any inaccuracy, error or delay in, or omission of any such data, information or message or the transmission or delivery of any such data, information or message; or b) Any loss or damage arising from or occasioned by any such inaccuracy, error, delay, omission, non- performance, interruption in any such data, information or message, due to either to any negligent act or omission or to any condition of force majeure or any other cause , whether or not within our or any provider’s control. We shall not be deemed to have received any order or communication transmitted electronically by you until we have actual knowledge of such order or communication

     </p>

      <h5 class="bold left">5.	ADDITIONAL IMPORTANT INFORMATION AND DISCLAIMERS REGARDING EXPERT ADVISORS</h5>
      <p class="left">
  The expert advisors are intended merely as a tool for implementing technical ideas that can be incorporated into a personally designed trading strategy or system for experienced traders only. No support, technical, advisory or otherwise, is offered by JMI Brokers LTD in their usage. Use of the Expert Advisors is entirely at your own risk and you acknowledge & understand that JMI Brokers LTD make no warranties or representations concerning the use of Expert Advisors and that JMI Brokers LTD . Does not, by implication or otherwise, endorse or approve of the use of the Expert Advisors & shall not be responsible for any loss to you occasioned by their usage.

      </p>

      <h5 class="bold left">6.	REPRESENTATIONS</h5>
      <p class="left">

        You acknowledge that from time to time, and for any reason, the Online Service may not be operational or otherwise unavailable for your use due to servicing, hardware malfunction, software defect, service or transmission interruption or other cause, and you agree to hold us and any provider harmless from liability of any damage which results from the unavailability of the Online Service. You acknowledge that you have alternative arrangements which will remain in place for the transmission and execution of your orders, in the event, for any reason, circumstances prevent the transmission and execution of all, or any portion of, your orders through the Online Service. You represent and warrant that you are fully authorized to inter this Agreement and under no legal disability which prevent you from trading and that you are & shall remain in compliance with all laws, rules and regulations applicable to your business. You agree that you are familiar with and will abide by any rules or procedures adopted by us and any provider in connection with use of the Online Service & you have provided necessary training in its use. You shall not (and shall not permit any third party) to copy, use analyze, modify, decompile, disassemble, reverse engineer, translate or convert any software provided to you in connection with use of the Online Service or distribute the software or the Online Service to any other third party.

       </p>

      <h5 class="bold left">7.	TERMINATION</h5>
      <p class="left">

      We may, at our sole discretion, terminate or restrict your access to the Online Service and may terminate this Agreement at any time. Upon termination, any software license granted to you herein shall automatically terminate.

      </p>


      <h5 class="bold left">8.	INDEMNITY</h5>
      <p class="left">You
  agree to indemnify & hold harmless us & each provider & their respective principles, Affiliates &agents from and against all claims, demands, proceedings, suits and all losses (direct, indirect or otherwise), liabilities costs and expenses (including attorney fees and disbursements),paid in settlement, incurred or suffered by us and\or a providers and\or our or their respective principals, affiliates & agents arising from or relating to your use of the Online Service or the transactions contemplated hereunder. This indemnity provision shall survive termination of this Agreement.
      </p>

      <h5 class="bold left">9.	MISCELLANEOUS</h5>
      <p class="left">
  You may not amend the terms of this Agreement. We may amend the terms of this Agreement upon notice to you (including electronic delivery). By continued access to and use of the Online Service, you agree to any such amendments to this Agreement. This Agreement us the entire Agreement between the parties relating to the subject hereof, and, except with respect to the Customer Account Agreement between the parties, all prior negotiations and understandings between the parties, whether written or oral, are hereby merged into this Agreement. Nothing in this Agreement shall be deemed to supersede or modify a party’s right and obligations under the Agreement
      </p>

      <p class="left" style="display:none;">* JMI Brokers LTD will not cover any profits or losses that may occur in any client account if market slip up or down more then 300 pips in 24 hours.</p>

      <h5 class="bold left">Contact us</h5>
      <p class="left">JMI Brokers LTD</p>
      <li>Address:  1276, Govant Building, Kumul Highway, Port Vila, Republic of Vanuatu:</li>
      <li>Phone no: +678 24404</li>
      <li>Fax  no:  +678 23693</li>
      <li>Website:  <a href="https://www.jmibrokers.com">www.jmibrokers.com</a></li>
    </p>

    </div>
    <div class="row" >
      <div class="col-sm-8" >
        <label class="col-sm-4">Signature</label>
        <div class="col-sm-8 ">
            <div class="controls">
                 <input class="form-control" type="text" name="signature" id="signature" placeholder="Full Name English Signature" required/>
                 <label style="margin:5px 0px;"> <input type="checkbox" value="0" required/> I agree the terms and conditions</label>

            </div>
        </div>
    </div>


  </div>
  <br />

  <div class="row" >
    <div class="col-sm-8" >
      <label class="col-sm-4"></label>
      <div class="col-sm-8 ">
          <div class="controls">
               <input class="btn btn-success form-control" type="submit" id="submit" value="Open Account"/>

          </div>
      </div>
  </div>


</div>

  {!! Form::close() !!}

<?PHP }else{ ?>


 {!! Form::open(['url'=>'en/cpanel/open-account'])  !!}


 <!------------------------------------------Start Table----------------------------------------->
     <!-- section content begin -->
 <div class="" id="main-section-6">
             <div class="uk-container in-wave-4" >
                 <div class="uk-grid uk-flex uk-flex-center">

                     <div class="col-sm-12" id="main-pricing-list">
                         <div class="in-wave-pricing-list align-self-stretch" >

                         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 margin-top-10" >
                                     <div class="package">
                                         <p class="minimum">Minimum funding<span class="price">100 USD </span></p>
                                         <h2 class="title">Fixed spread account</h2>
                                         <p class="desc">Benefit from industry-leading entry prices</p>
                                         <hr>
                                         <ul class="package-features-list package-features-list2">
                                             <li><i class="fa fa-check" aria-hidden="true"></i>1 PIP fixed spread</li>
                                             <li><i class="fa fa-check" aria-hidden="true"></i>Up To 1:500 Leverage</li>
                                             <li><i class="fa fa-check" aria-hidden="true"></i>100$ Minimum funding</li>
                                             <li><i class="fa fa-check" aria-hidden="true"></i>USD is the main currency</li>
                                             <li><i class="fa fa-check" aria-hidden="true"></i>Islamic account - No Swap</li>
                                             <li><i class="fa fa-check" aria-hidden="true"></i>Minimun lot 0.01</li>
                                             <li><i class="fa fa-check" aria-hidden="true"></i>Expert advisor</li>
                                             <li><i class="fa fa-check" aria-hidden="true"></i>Headging is available</li>
                                             <li><i class="fa fa-check" aria-hidden="true"></i>4 Digits</li>

                                             <li class="false"><i class="fa fa-times" aria-hidden="true"></i>Scalping is not available</li>
                                         </ul>
                                         <a val="1" class="btn btn-success uk-button uk-button-default uk-border-rounded uk-align-center">Select Now</a>
                                     </div>
                                 </div>

                                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 margin-top-10" >
                                     <div class="package">
                                         <p class="minimum">Minimum funding<span class="price">500 USD </span></p>
                                         <h2 class="title">Variable spread account</h2>
                                         <p class="desc">Receive even tighter spreads and commissions</p>
                                         <hr>
                                         <ul class="package-features-list package-features-list2">
                                             <li><i class="fa fa-check" aria-hidden="true"></i>0.1 PIP spread</li>
                                             <li><i class="fa fa-check" aria-hidden="true"></i>Up To 1:200 Leverage</li>
                                             <li><i class="fa fa-check" aria-hidden="true"></i>500$ Minimum funding</li>
                                             <li><i class="fa fa-check" aria-hidden="true"></i>USD is the main currency</li>
                                             <li><i class="fa fa-check" aria-hidden="true"></i>Islamic account - No Swap</li>
                                             <li><i class="fa fa-check" aria-hidden="true"></i>Minimun lot 0.01</li>
                                             <li><i class="fa fa-check" aria-hidden="true"></i>Expert advisor</li>
                                             <li><i class="fa fa-check" aria-hidden="true"></i>Headging is available</li>
                                             <li><i class="fa fa-check" aria-hidden="true"></i>5 Digits</li>

                                             <li class="false"><i class="fa fa-times" aria-hidden="true"></i>Scalping is not available</li>
                                         </ul>
                                         <a val="3" class="btn btn-success uk-button uk-button-default uk-border-rounded uk-align-center" >Select Now</a>
                                     </div>
                                 </div>

                                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 margin-top-10" >
                                   <div class="package">
                                       <p class="minimum">Minimum funding<span class="price"> 1000 USD</span></p>
                                       <h2 class="title">Scalping account</h2>
                                       <p class="desc">Benefit from industry-leading entry prices</p>
                                       <hr>
                                       <ul class="package-features-list package-features-list2">
                                           <li><i class="fa fa-check" aria-hidden="true"></i>1.7 PIP </li>
                                           <li><i class="fa fa-check" aria-hidden="true"></i>Up to 1:100 Leverage</li>
                                           <li><i class="fa fa-check" aria-hidden="true"></i>1000$ Minimum funding</li>
                                           <li><i class="fa fa-check" aria-hidden="true"></i>USD is the main currency</li>
                                           <li><i class="fa fa-check" aria-hidden="true"></i>Islamic account - No Swap</li>
                                           <li><i class="fa fa-check" aria-hidden="true"></i>Minimun lot 0.01</li>
                                           <li><i class="fa fa-check" aria-hidden="true"></i>Expert advisor</li>
                                           <li><i class="fa fa-check" aria-hidden="true"></i>Headging is available</li>
                                           <li><i class="fa fa-check" aria-hidden="true"></i>5 Digits</li>

                                           <li><i class="fa fa-check" aria-hidden="true"></i>Scalping is  available</li>
                                       </ul>
                                       <a val="5" class="btn btn-success uk-button uk-button-default uk-border-rounded uk-align-center">Select Now</a>
                                   </div>
                                 </div>

                                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 margin-top-10" >
                                   <div class="package">
                                       <p class="minimum">Minimum funding<span class="price"> 100 USD</span></p>
                                       <h2 class="title">Bonus account</h2>
                                       <p class="desc">Benefit from industry-leading entry prices</p>
                                       <hr>
                                       <ul class="package-features-list package-features-list2">
                                           <li><i class="fa fa-check" aria-hidden="true"></i>2 PIP Fixed Spread</li>
                                           <li><i class="fa fa-check" aria-hidden="true"></i>Up To 1:500 Leverage</li>
                                           <li><i class="fa fa-check" aria-hidden="true"></i>100$ Minimum funding</li>
                                           <li><i class="fa fa-check" aria-hidden="true"></i>USD is the main currency</li>
                                           <li><i class="fa fa-check" aria-hidden="true"></i>Islamic account - No Swap</li>
                                           <li><i class="fa fa-check" aria-hidden="true"></i>Minimun lot 0.01</li>
                                           <li><i class="fa fa-check" aria-hidden="true"></i>Expert advisor</li>
                                           <li><i class="fa fa-check" aria-hidden="true"></i>Headging is available</li>
                                           <li><i class="fa fa-check" aria-hidden="true"></i>4 Digits</li>

                                           <li class="false"><i class="fa fa-times" aria-hidden="true"></i>Scalping is not available</li>
                                       </ul>
                                       <a val="4" class=" btn btn-success uk-button uk-button-default uk-border-rounded uk-align-center">Select Now</a>
                                   </div>
                                 </div>



                         </div>
                       </div>

                       </div>
                       </div>
                 </div>
             </div>
         <!-- section content end -->


 <!------------------------------------------End Table----------------------------------------->





            <style>
            .ad_types_table table:hover{
              background: #0059b2;
            }
            .ad_types_table table:hover tbody tr {
              background-color: #0059b2;
              color: #fff;
            }
            .ad_types_table table:hover th h4{
              color:#fff;
            }
            .ad_types_table table .btn-primary {
                color: #ffc926 !important;

            }
            .ad_types_table table:hover .btn-primary {
                color: #0059b2 !important;
                background-color: #ffc926;
                border-color: #ffc926;
            }

            .slide-demo-button,.slide-live-button{margin:0px !important;}
            .ad_types_table {
                width: 100%;
                margin-bottom: 55px;
                border-: 1px solid #d6d6d6;
                border-radius: 4px;
            	border-bottom: none;
                -moz-border-radius: 4px;
                -webkit-border-radius: 4px;
            }

            .ad_types_table th {
                padding-: 10px 0px;
                border-bottom: 1px solid #d6d6d6;
                    height: 120px;
            }
            .ad_types_table table:hover  th,.ad_types_table table:hover  td{background:#0059b2  !important;} .ad_types_table th, .ad_types_table td {background:#eee;
                width: 25%;
            }
            .ad_types_table td > p {
                height: 30px;
                min-height: 30px;
                display: table-cell;
                vertical-align: middle;
                text-align: left;
            }
            .breakout_table {
                top: -26px;
                left-: -11px;
                width-: 105%;
                z-index: 99;
                background: #fff;
                position: absolute;
                box-shadow: 5px 10px 20px 5px rgba(0,0,0,0.25);
            }
            .most_popular {
                color: #fff;
                margin: 5px 0;
                font-size: 13px;
                font-weight: 600;
                padding: 4px 10px;
                border-radius: 2px;
                background: #333;
                display: inline-block;
                text-transform: uppercase;
            }
            .ad_types_table tbody tr {
                background-color: #eee;color:#0059b2;
            }
            .ad_types_table td {
                height: 60px;
                padding: 5px;
            }
            .ad_types_table .widthcolumn {
              padding: 0;
              border: 1px solid #d6d6d6;
              width: 19%;
              min-width: 150px;
              display: inline-block;
              margin: 0px;
            }
            .ad_types_table th h4 {
                font-weight: 700;
                color: #0059b2;
            }
            .ad_types_table .blue{color:#0056b5;}
            .ad_types_table .error{color:#0059b2;padding: 4px 5px;}
             .ad_types_table .fa{border: 1px solid #0056b5;
                border-radius: 50%;
                padding: 4px;
                margin-right: 10px;background:#fff;}
             .ad_types_table .error{border: 1px solid #0059b2;}
            	tfoot {
                display: table-footer-group;
                vertical-align: middle;
                border-: 1px solid #d6d6d6;
            }
            .ad_types_table th .job_cost {
                font-size: 30px;
                line-height: 35px;
            	text-align:center;
            }
            .ad_types_table tbody tr:nth-child(9), .ad_types_table tbody tr:nth-child(11) , .ad_types_table tbody tr:nth-child(13) {
                height: 85px;
            }

            tr {
                display: table-row;
                vertical-align: inherit;
                border-color: inherit;
            }
            td, th {
                display: table-cell;
                vertical-align: middle;text-align:center;
            }
            .ad_types_table tr:last-child td{text-align:center;}
            @media only screen and (max-width: 768px)
            {
            #premium-pack
            {
                margin-top: 35px;
            margin-bottom: 20px;
            }
            }
            @media only screen and (max-width: 300px)
            {
            #premium-pack
            {
                margin-top: 50px;
            margin-bottom: 160px;
            }
            }
            </style>




            <div class="col-sm-12">




                <br />

                <div class="row" id="account_type" >
                  <div class="col-sm-8">

                    <label class="col-sm-4">Account Type:</label>
                    <div class="col-sm-8">
                        <div class="controls">
                            <select class="form-control" name="account_type" id="account_type" required>
                                <option value="" disabled selected >- Select -</option>
                                <option value="1">Individual</option>
                                <option value="2">IB</option>
                            </select>
                        </div>
                    </div>
                  </div>
                </div>

                <br />

                <div class="row" style-="display:none;">
                    <div class="col-sm-8">


						<label class="col-sm-4">Account Group:</label>
						<div class="col-sm-8">
							<div class="controls">
								<select class="form-control" name="account_group" id="account_group" onchange="accountGroup()"  required >
								  <option value="" disabled selected >- Select -</option>
								  <option value="1" class="forlive" style-="display:none;">Fixed spread account</option>
								  <option value="3" class="forlive" style-="display:none;">Variable spread account</option>
								  <option value="5" class="forlive" style-="display:none;">Scalping account</option>
								  <option value="4" class="forlive" style-="display:none;">Bonus account</option>

								</select>
							</div>
						</div>
                    </div>
                </div>

                <br />
                <div class="row">
                  <div class="col-sm-8">
                    <label class="col-sm-4">Currency base:</label>
                    <div class="col-sm-8">
                        <div class="controls">
                            <select class="form-control" name="currency" id="currency"  required >
                                <option value="1" selected>USD</option>
                            </select>
                        </div>
                    </div>
                  </div>
                </div>

<br />

                <div class="row">

                    <div class="row" id="agreement-row" >


                    <div style="height: 300px;overflow-y: scroll;margin: 10px 20px;padding: 10px;">

                      <style>.bold{font-weight: bold;}.left{text-align: left;}.center{text-align: center;}</style>
                      <h4 class="head">Customer Account Agreement</h4>
<p style="text-align:left;">

<h5 class="boldText">JMI Brokers LTD is licensed broker from Vanuatu Financial Services Commission as Dealers in Securities under license number 15010</h5>
<h5 class="blue">Risk Disclosure Statement<h5>
<p class="big">Before engaging in the products offered by JMI Brokers LTD you should be aware of the risks which may be involved in such trading.</p>


<p class="blue">You should not enter into a transaction unless you fully understand:</p>

<li>The nature and fundamentals of the transaction and the market underlying such transactions.</li>
<li>The extent of the economic risk to which you are exposed as a result of such transactions(and determine that such risk is suitable for you in light of your specific experience in relation to the transaction and your financial objectives, circumstances and resources).</li>
<li>The legal terms and conditions for such transactions.</li>

<p  >You have the responsibility to fully understand the terms and conditions of the transactions to be undertaken, including, without limitation:</p>
<p  >1. The terms as to price, term, and expiration date, restrictions on exercising an OTC option and futures and of the terms material to the transaction.</p>
<p  >2 . Any terms describing risk factors, such as volatility, liquidity, and so on.</p>
<p  >3. The circumstances under which you may become obliged to make or take delivery of a Leveraged foreign exchange transaction or Futures contracts.</p>
<p  >The high degree of leverage that is often obtainable in trading of the products offered by JMI Brokers LTD can work against you as well as for you, due to fluctuating market conditions. Trading in such instruments can lead to large losses as well as gains in response to a small market movement.
<p  >If the market moves against you, you may not only sustain a total loss of your initial margin deposit, and any additional funds deposited with JMI Brokers LTD.</p>
<p  >to maintain your position, but you may also incur further liability to JMI Brokers LTD. You may be called upon to “top-up” your margin by substantial amounts at short notice to maintain your position, failing which JMI Brokers LTD may have to liquidate your position at a loss and you would be liable for any resulting loss. You may sustain substantial losses on a contract or trade if the market conditions move against your position. It
is in your interest to fully understand the impact of market movements, in particular the extent of profit/loss you would be exposed to when there is an upward or down ward movement in the relevant rates and the extent of loss if you have to liquidate a position, if market conditions move against you.</p>
<p  >Under certain market conditions you may find it difficult or impossible to liquidate a position ,to assess a fair price or assess risk exposure. This can happen, for example, where the market for a transaction is illiquid or where there is a failure in electronic or telecommunications systems, or where there is the occurrence of an event commonly known as “force majeure”. Placing contingent orders, such as “stop-loss” orders, will not necessarily limit your losses to the intended amounts, as it may be impossible to execute such orders under
certain market conditions. When placing a stop order or stop loss order, you must be aware that in certain market conditions you may be filled at a different price than initially requested.
Because the prices and characteristics of over-the-counter transactions are individually negotiated and there is no central source for obtaining prices, there are in efficiencies in transaction pricing. We consequently cannot and do not warrant that our prices or the prices we secure for you are or will at any time be the best prices available to you.
Transactions in futures and options involve a high degree of risk and are not suitable for many members of the public. Such transactions should be entered into only by persons who have read, understood and familiarized themselves with the type of futures and options, style of exercise, the nature and extent of rights and obligations and the associated risks.
The objective of this statement is to explain to you, briefly, the nature of trading in the products offered by JMI Brokers LTD, prior to your engaging in such transactions. In particular, you must be aware that the risk of loss in trading foreign exchange and precious metals and Futures (OTC) can be substantial. However, this statement does not purport to disclose or discuss all of the risks and other significant aspects of any transaction .You should therefore consult with your own legal, tax and financial advisers prior to entering into any particular transaction.
By signing this Risk Disclosure Statement, you understand that no one can guarantee trading profits and past results do not assure future profitability, and you acknowledge and confirm that you have fully read and understood the Risk Disclosure Statement and that you are treated as experienced and/or professional Customer.</p>


<h5 class="blue">1.	TRADING AUTHORIZATION</h5>
<p class="left">JMI Brokers is a financial company authorized and holds a Principals license from Vanuatu Financial Services Commission (VFSC) as “Dealers in Securities” to carry on the business of dealing in securities such as financial Contracts for differences. (“CFDs”) in commodities, equities, indices, and Currency pairs (Fx), etc under three Licenses classes (A, B, and C) as below: Class A : CFDs in currency pairs ( Fx). Class B: CFDs in Precious Metals.
</p>
<p class="left">Class C: CFDs in Commodities, equities, indices,etc All CFDs contracts are leveraged products and will be executed between you as principal and us as principal.
You shall be directly and personally responsible for performing your obligations under every transaction entered in to between us, whether you are dealing as principal directly or through an agent, or as agent for another person, and you shall indemnify us in respect of all liabilities, losses or costs of any kind or nature what so ever which may be incurred by us as a direct or in direct result of any failure by you to perform any such obligation.
.</p>
<h5 class="blue">2.	APPLICABLE RULES AND REGULATIONS</h5>
<p  >All orders entered for the purchase or sale of a Commodity Contract and all transactions in Commodity Contracts executed for Customer’s accounts shall be subject to the constitution, by Laws, rules, regulations, customs and usages (collectively “rules”) of the exchange or market, and its clearing house, if any, where such orders are directed or such transactions are executed and any applicable self- regulatory organization and to the rules and regulations promulgated there under (collectively “laws JMI Brokers LTD shall not be liable to Customer as a result of any action taken by JMI Brokers LTD or its agents in compliance with any of the foregoing rules or laws. This paragraph is solely for the protection and benefit of JMI Brokers LTD ,and any failure by JMI Brokers LTD or its agents to comply with any of the foregoing rules or laws shall not relieve Customer of any obligation under this agreement nor be construed to create rights under this agreement in favor of Customer against JMI Brokers LTD</p>

<h5 class="blue">3.	CHARGES PAYABLE BY CUSTOMER.</h5>
<p  >Customer agrees to pay (a) such commissions and service fees as JMI Brokers LTD may establish and charge from time to time; (b) the amount of any loss that may result from transactions by JMI Brokers LTD on Customer’s behalf, including any deficit balance; and(c) interest on any deficit balance and on any other amounts payable to JMI Brokers LTD under this agreement at the rate of three percent (3%) over the Prime rate in effect from time to time, or the maximum rate allowed by law, which ever is less.</p>

<h5 class="blue">4.	RISK OF LOSS</h5>
<p  >All transactions effected for Customer’s accounts and all fluctuations in the market prices of the Commodity Contracts carried in Customer’s accounts are at Customer’s sole risk and Customer shall be solely liable under all circumstances. By execution of this agreement, Customer warrants that Customer is willing and financially able to sustain any such losses. JMI Brokers LTD is not responsible for the obligations of the persons with whom Customer’s transactions are effected, nor is JMI Brokers LTD responsible for delays in transmission, delivery or execution of Customer’s orders due to malfunctions of communications facilities or other causes.</p>



<p  >JMI Brokers LTD shall not be liable to Customer for the loss of any margin deposits which is the direct or indirect result of the bankruptcy, in solvency, liquidation, receivership, custodianship or assignment for the benefit of creditors of any bank, another clearing broker, exchange, clearing organization or similar entity.</p>

<h5 class="blue">5.	TRADING RECOMMENDATIONS</h5>
<p  >Customer acknowledges that any trading recommendations and market or other information</p>
<p  >Communicated to Customer by JMI Brokers LTD , although based upon information obtained from sources Believed by JMI Brokers LTD to be reliable, may be incomplete, may not be verified, may differ from advice given to other customers, and may be changed without notice to Customer. Customer understands JMI Brokers LTD  or one or more of its affiliates may have apposition in and buy or sell Commodity Contracts which are the subject of information or recommendations furnished to Customer and that these positions and transactions of JMI Brokers LTD or any affiliates may not be consistent with are there commendations furnished to customer.</p>
<p  >JMI Brokers LTD makes no representation or warranty with respect to the tax consequences of customer transactions</p>

<h5 class="blue">6.	INDEMNIFICATION</h5>
<p  >Customer hereby agrees to indemnify JMI Brokers LTD and hold JMI Brokers LTD harmless from any liability, cost or expense (including attorneys’ fees and expenses and any fines or penalties imposed by any governmental agency, contract market, exchange, clearing organization or other self-regulatory body) which JMI Brokers LTD may incur or be subjected to with respect to Customer’s account or any transaction or position there in. Without limiting the generality of the foregoing, Customer agrees to reimburse JMI Brokers LTD on demand for any cost of collection incurred by JMI Brokers LTD in collecting any sums owing by Customer under this agreement and any cost incurred by JMI Brokers LTD in successfully defending against any claims asserted by Customer, including all attorneys’ fees, interest and expenses.</p>

<h5 class="blue">7.	RECORDING</h5>
<p  >Customer understands that all conversations regarding Customer’s accounts, orders and Commodity Contracts between Customer and JMI Brokers LTD maybe recorded
by JMI Brokers LTD and Customer irrevocably consents to such recordings and waives any right to object to JMI Brokers LTD ’s use of such recordings in any proceeding or as JMI Brokers LTD otherwise deems appropriate.</p>

<h5 class="blue">8.	FOREIGN CURRENCY</h5>
<p  >If any transaction for Customer’s accounts is effected on any exchange or in any market on which transactions are settled in a foreign currency, any profit or loss arising as a result of a fluctuation in the rate of exchange between such currency and the United States Dollar shall be entirely for Customer’s account and at Customer’s sole risk. JMI Brokers LTD is hereby authorized to convert funds in Customer’s accounts in to and from such foreign currency at rates of exchange prevailing at the banking and other institutions with which JMI Brokers LTD normally conducts such business transactions.</p>



<h5 class="blue">9.	MARGIN REQUIREMENTS.</h5>
<p  >Customer agrees to maintain at all times without demand from JMI Brokers LTD margin requirements for the positions in the Customer’s account (s). Customer will at all times maintain such margin or collateral for Customer’s account (s) as requested from time to time by JMI Brokers LTD (which requests maybe greater than exchange and clearing house requirements). Margin deposits shall be made by wire transfer of immediately available funds, or by such other means as JMI Brokers LTD may direct, and shall be deemed made when received by JMI Brokers LTD.</p>
<p  >JMI Brokers LTD failure at anytime to call for a deposit of margin shall not constitute a waiver of JMI Brokers LTD rights to do so at anytime there after, nor shall it create any liability of JMI Brokers LTD to Customer.</p>

<h5 class="blue">10.	LIQUIDATION OF POSITIONS.</h5>
<p  >In the event that (a) Customer shall fail to timely deposit or maintain margin or any amount
hereunder; (b) Customer (if an individual) shall die or be judicially declared incompetent or (if an entity) shall be dissolved or otherwise terminated; (c) a proceeding under the Bankruptcy Act, an assignment for the benefit of creditors, or an application for a receiver, custodian, or trustee shall be filed or applied for by or against Customer;(d)attachment is levied against Customer’s
account; (e) the property deposited as collateral is determined by JMI Brokers LTD in its sole discretion, regardless of current market quotations, to be in adequate to properly secure the account; or (f) at anytime JMI Brokers LTD
deems it necessary for its protection for any reason whatsoever, JMI Brokers LTD may, in the manner it deems appropriate, close out Customer’s open positions in whole or in part, sell any or all of Customer’s property held by JMI Brokers LTD , buy any securities, Commodity Contracts, or other property for Customer’s account, and may cancel any outstanding orders and commitments made by JMI Brokers LTD on behalf of Customer. Such sale, purchase or cancellation maybe made at JMI Brokers LTD
discretion without advertising the same and without notice to Customer or his personal representatives and without prior tender, demand for margin or payment, or call of any kind upon
Customer. JMI Brokers LTD may purchase the whole or any part there of free from any right of red emption. It is understood that a prior demand or call or prior notice of the time and place of such sale or purchase shall not be a waiver of JMI Brokers LTD right to sell or buy without demand or notice as here in provided. Subject to applicable laws and rules, and in order to prevent non-permitted trading in debit/deficit accounts, profits on any trades executed without JMI Brokers LTD’s express permission, for a Customer account that is debit/deficit at the time the order is placed ,shall before JMI Brokers LTD account if JMI Brokers LTD in its discretion so elects. Losses on any such trades shall be jointly and severally borne by the Introducing Broker, if any, and the Customer. Customer shall remain liable for and pay JMIBrokers LTD the amount of any deficiency in any account of Customer with JMI Brokers LTD resulting from any transaction described above. Our determination of the current market value and the amount of additional and/or variation margin shall be conclusive and shall not be challenged by the Customer.</p>


<h5 class="blue">11.	TRADING LIMITATIONS</h5>
<p  >JMI at any time, in its sole discretion, may limit the number of positions which Customer may maintain or acquire through JMI Brokers LTD , and JMI Brokers LTD is under no obligation to effect any transaction for Customer’s accounts which would create positions in excess of the limit which JMI Brokers LTD has set.</p>
<p  >Customer agrees not to exceed the position limits established for any contract market, whether
acting alone or with others, and to promptly advise JMI Brokers LTD if Customer is required to file any reports on positions. </p>

<h5 class="blue">12.	EXERCISES AND ASSIGNMENTS</h5>
<p  >With regard to options transactions, Customer understands that some exchange clearing houses have established exercise requirements for the tender of exercise instructions and that options will become worth less in the event that Customer does not deliver instructions by such expiration times. At least two business days prior to the first notice day in the case of long positions in futures or forward contracts, and at least two business days prior to the last trading day in the case of short positions in open futures or forward contracts or long and short positions in options, Customer agrees that Customer will either give JMI Brokers LTD instructions to liquidate or make or take delivery under such futures or forward contracts, or to liquidate, exercise, or allow the expiration of such options, and will deliver to JMI Brokers LTD sufficient funds and/or any documents required in connection with exercise or delivery. If such instructions or such funds and/or documents, with regard to option transactions, are not received by JMI prior to the expiration of the option, JMI Brokers LTD may permit an option to expire. Customer also understands that certain exchanges and clearing houses automatically exercise some “in-the -money” options unless instructed otherwise, Customer acknowledges full responsibility for taking action either to exercise or to prevent exercise of an option contract, as the case maybe JMI Brokers LTD is not required to take any action with respect to an option, including without limitation any action to exercise a valuable option contract prior to its expiration or to prevent the automatic exercise of an option, except upon Customer’s express instructions. Customer further understands that JMI Brokers LTD also has established exercise cut-off times which maybe different from the times established by the contract markets in clearing houses. In the event that timely exercise and assignment instructions are not given, Customer hereby agrees to waive any and all claims for damage or loss Customer might have against JMI Brokers LTD arising out of the fact that an option was or was not exercised. Customer understands that JMI Brokers LTD randomly assigns exercise notices to Customers, that all short option positions are subject to assignment at anytime, including positions established on the same day that exercises areas signed, and that exercise assignment notices are allocated randomly from among all Customers’ short option positions which are subject to exercise.</p>


<h5 class="blue">13.	SECURITY AGREEMENT</h5>
<p  >(a)	All Commodity Contracts, funds, securities, and other property in Customer’s accounts or otherwise now or at any time in the future held by JMI Brokers LTD for any purpose, including safekeeping, are subject to a security interest and general lien in JMI Brokers LTD ’s favor to secure any indebtedness at any time owing from Customer to JMI Brokers LTD, including any indebtedness resulting from any guarantee of a transaction or account by Customer or Customer’s assumption of joint responsibility for any transaction or account. From time to time and without prior notice to Customer, JMI Brokers LTD may transfer interchangeably between and among any account of Customer maintained at JMI Brokers LTD any of Customer’s funds (including segregated funds), securities, commodities, or other property for purposes of margin, reduction or satisfaction of any debit balance, or any reason which JMI Brokers LTD deems appropriate. Within areas on able time after any such transfer, JMI Brokers LTD will confirm the transfer in writing to Customer.</p>

<p  >(b)	Customer hereby grants to JMI Brokers LTD the right to pledge, repledge, or invest either separately or with the property of other Customers, any securities or other property held by JMI Brokers LTD for the account of Customer or as collateral therefore, including without limitation to any exchange or clearing house through which trades of Customer are executed.
JMI Brokers LTD shall be under no obligation to pay to Customer or account for any interest income, or benefit derived from such property and funds or to deliver the same securities or other property deposited with or received by JMI Brokers LTD for Customer. JMI Brokers LTD may deliver securities or other property of like or equivalent kind or amount; JMI Brokers LTD shall have the right to offset any amounts it holds for or owes to Customer against any debts or other amounts owed by Customer to JMI Brokers LTD </p>

<h5 class="blue">14.	AUTHORITY TO TRANSFER ACCOUNTS</h5>
<p  >Until further notice in writing from the undersigned, JMI Brokers LTD is hereby authorized at anytime, without prior notice to the undersigned, to transfer from any account or accounts of the undersigned maintained at JMI Brokers LTD or any exchange member through which
JMI Brokers LTD clears customer transactions, such excess funds, securities, commodities, commodity futures contracts, commodity options, and other property of the undersigned as in JMI Brokers LTD ’s sole judgment maybe required for margin in any other such account or accounts or to reduce or satisfy any debit balances in any other account or accounts provided such transfer or transfers comply with relevant governmental and exchange rules and regulations applicable to the same. JMI Brokers LTD is further authorized to liquidate any property held in any such account or accounts of the undersigned whenever, in JMI Brokers LTD ’s sole judgment, such liquidation is necessary in order to effectuate the above authorized transfer and application of property. With in areas on able time after making any such transfer or application, JMI Brokers LTD will Confirm the same in writing to the under signed.</p>

<h5 class="blue">15- Monthly Rebate</h5>
<p  >For all both offers whether its offer number 1 Rebate + Bonus or offer number 2 1 pip back No bonus the value of Monthly Rebate should not exceed the value of original fund deposited at that month. Therefore the Maximum monthly rebate in any month is equal to sum of monthly deposits excluding bonus or any other promotions.</p>


<h5 class="blue">16.	NOTICES AND COMMUNICATIONS</h5>
<p  >Customer shall make all payments, except with regard to wire transfers discussed above, and deliver all notices and communications to the office of JMI Brokers LTD . All communications JMI Brokers LTD to Customer maybe sent to the Customer at the address indicated on the Customer Account Application or to such other address as Customer hereafter directs in writing. Confirmations of trades, statements of account, margin calls, and any other written notices shall be binding on Customer for all purposes,
unless Customer calls any error there into JMI Brokers LTD ’s attention in writing (a) prior to the start of business on the business day next following notification, in the case of margin calls and reports of executions and (b) within 24 hours of delivery to Customer, in the case of statements of account and any written notices (other than trade confirmations or margin calls)or demands. None of these provisions, however, will prevent JMI Brokers LTD upon discovery of any error or omission, from correcting it. The parties agree that such errors, whether resulting in profit or loss, will be corrected in Customer’s account, will be credited or debited so that it is in the same position it would have been in if the error had not occurred. Whenever a correction is  made, JMI Brokers LTD will promptly make written or oral notification to Customer. All communications, whether by mail, telex, courier, telephone, telegraph, messenger, facsimile, or otherwise (in the case of mailed notices), or communicated (in the case of telephone notices), sent to Customer at Customer’s or agent’s address (or telephone number) as given to JMI Brokers LTD from time to time shall constitute personal delivery to Customer whether or not actually received by Customer, and Customer hereby waives all claims resulting from failure to receive such communications.</p>

<h5 class="blue">17.	PRINTED MEDIA STORAGE</h5>
<p  >Customer acknowledges and agrees that JMI Brokers LTD may reduce all documentation evidencing Customer’s account, including the original signature documents executed by Customer in the opening of such Customer’s account with JMI Brokers LTD , utilizing a printed media storage device such as micro-fiche or optical disc imaging. Customer agrees to permit the records stored by such printed media storage method to serve as a complete, true and genuine record of such Customer’s account documents and signatures.</p>

<h5 class="blue">18.	REPRESENTATIONS</h5>
<p  >Customer represents that (a) (if an individual) he is of the age of majority, of sound mind, and authorized to open accounts and enter into this agreement and to effectuate transactions in Commodity Contracts as contemplated hereby; (b) (if an entity) Customer is validly existing and empowered to enter into this agreement and to effect transactions in Commodity Contracts as contemplated hereby; (c) the statements and financial information contained on Customer’s Account Application submitted herewith (including any financial statement there with)are true and correct; and (d) no person or entity has any interesting or control of the account to which this agreement pertains except as disclosed in the Customer’s Account Application. Customer further
represents that, except as here to fore disclosed to JMI Brokers LTD in writing, he is not an officer or employee of any exchange, board of trade, clearing house, or an employee or affiliate of any futures commission merchant, or an introducing broker, or an officer ,partner, director, or employee of any securities broker or dealer. Customer agrees to furnish appropriate financial statements to JMI Brokers LTD to disclose to JMI Brokers LTD any material changes in the financial position of Customer and to furnish promptly such other information concerning Customer as JMI Brokers LTD reasonably requests.</p>


<h5 class="blue">19.	INTRODUCING BROKER</h5>
<p  >Customer acknowledges that JMI Brokers LTD is not responsible for the conduct, representations and statements of the introducing broker or its associated persons in the handling of Customer’s account. Customer agrees to waive any claims Customer may have against JMI Brokers LTD and to indemnify and hold JMI Brokers LTD harmless for any actions or omissions of the introducing broker or its associated persons.</p>

<h5 class="blue">20.	CONFLICTS OF INTEREST</h5>
<p  >JMI Brokers LTD may execute Commodity Contracts for Customer’s account (s) either as principal or broker. As broker, JMI Brokers LTD will execute transaction similar to Customer’s transaction with another market participant in the financial market. As principal JMI Brokers LTD may not execute transaction similar to Customer in the financial market and hold the opposing transaction in JMI Brokers LTD inventory of Commodity Contracts. As a result of acting as principal Customer should realize that JMI Brokers LTD maybe acting as your counter party and that JMI Brokers LTD maybe placed in such a position that a conflict of duty
occurs. JMI Brokers LTD , its Associates or other persons connected with JMI Brokers LTD may have an interest, relationship or arrangement that is material in relation to any Commodity Contract effected under this Agreement. By entering into this Agreement the Customer agrees that J JMI Brokers LTD may transact such business without prior reference to the Customer. In addition, JMI Brokers LTD may provide advice and other services to third parties whose interests maybe in conflict or competition with the Customer’s interests JMI Brokers LTD , its Associates and the employees of any of them may take positions opposite to the Customer or maybe in competition with the Customer to acquire the same or a similar position. JMI Brokers LTD will not deliberately favor any person over the customer but will not be responsible for any loss which may result from such competition</p>

<h5 class="blue">21.	BINDING EFFECT OF AGREEMENT; MODIFICATIONS</h5>
<p  >This agreement shall be binding upon and inure to the benefit of JMI Brokers LTD ,its successors and assigns, and Customer’s heirs, executors, administrators, legatees, successors, personal representatives and assigns.
Except as provided in paragraph 2, no change in or waiver of any provision of this agreement shall be binding unless it is in writing, dated subsequent to the date hereof, and signed by the party intended to be bound. No agreement or understanding of any kind shall be binding upon JMI Brokers LTD unless it is agreed to in writing, accepted and signed by an authorized officer.</p>

<h5 class="blue">22.	FORCE MAJEURE EVENTS</h5>
<p class="bold">We may, in our reasonable opinion, determine that an emergency or an exceptional market condition exists (a “Force Majeure Event”). A Force Majeure Event shall include, but is not limited to, the following:</p>
<li>	Any act, event or occurrence (including without limitation any strike, riot or commotion, interruption or power supply or electronic or communication equipment failure) which, in our opinion, prevents us from maintaining an orderly market in one or more of the investments in respects of which we ordinarily deal in Commodity Contracts

<li>	The suspension or closure of any market or the abandonment or failure of any event upon which we base, or to which we in any way relate, our quote, or the imposition of limits or special or unusual terms on the trading in any such market or on any such event;


<li>	The occurrence of an excessive movement in the level of any Commodity Contract and/or the
underlying market or our anticipation (acting reasonably) of the occurrence of such movements.</li>

<p class="left ">If we determine that a Force Majeure Event exists we may in our absolute is creation without notice and at any time take one or more of the following steps:</p>

<li>	Increase your deposit requirements; close any or all of your open Commodity Contracts at	such closing level as we reasonably believe to be appropriate.</li>
<li>	Suspend or modify the application of all or any of the terms of this agreement.</li>
to the extent that the Force Majeure Event  makes  it  impossible or impracticable for us to	comply with the term or terms in question;
<li>	OR alter the last time for trading for particular Commodity Contract.</li>


<h5 class="blue">23.	HEADINGS</h5>
<p class="left ">The headings of each provision are for descriptive purposes only and shall not be deemed to modify or qualify any of the rights or obligations set forth in each provision.</p>

<h5 class="blue">24.	GOVERNING LAW</h5>
<p class="left ">This agreement shall be governed by the laws of Republic of Vanuatu  , regardless of form, arising out of transactions under this agreement maybe brought by customer more than three months after the cause of action arose.</p>

<h5 class="blue">25.	ACCEPTANCE OF AGREEMENT</h5>
<p class="left ">This agreement shall constitute an effective contract between JMI and Customer upon acceptance by an authorized officer of JMI.</p>

<h5 class="blue">26.	MULTIPLE ACCOUNTS</h5>
<p class="left ">Customer agrees that JMI Brokers LTD may, from time to time, change the account number assigned to any account covered by this agreement, and that this agreement shall remain in full force and effect.</p>
<p class="left ">Customer agrees further that this account, if closed and reopened, as well as all additional accounts opened in Customer’s name at JMI, shall be covered by this same agreement with the exception of any account for which a new customer agreement is signed.</p>

<h5 class="blue">27.	ASSIGNMENT</h5>
<p class="left ">JMI may assign Customer’s account to another registered futures commission merchant by notifying Customer of the date and name of the intended assignee ten (10) days prior to the assignment. Unless Customer objects to the assignment in writing prior to the scheduled date for assignment, the assignment will be binding on Customer.</p>

<h5 class="blue">28.	CUSTOMER ACKNOWLEDGMENTS AND SIGNATURE</h5>
<p class="left ">Customer hereby understands the Customer Account Agreement and consents and agrees to all of the terms and conditions of the agreement set forth above. Customer acknowledges that trading in Commodity Contracts is speculative, involves a high degree of risk and is appropriate only for persons who can assume risk of loss in excess of their margin deposits.</p>
<br />

<h5 class=" left">Online Access Agreement</h5>

<p  >This agreement sets forth the terms and conditions under which we, JMI Brokers LTD ,shall permit you to have access to one or more terminals, including terminal access through your internet browser, for the electronic transmission of orders and \ or transactions, for your
accounts with us. </p>
<p class="left ">This agreement also sets forth the terms and conditions under which we shall permit you electronically to monitor the activity, orders and\or transactions in your account (collectively, the “Online Service”). For purposes of this Agreement the term “Online Service” includes all software and communication links, and in consideration thereof, Customer agrees to the following:<p  >

<h5 class="blue">1.	LICENSE GRANT AND RIGHT OF USE</h5>
<p  >By this Agreement, where we are supplying you with software for use with the Online Service,
you may use the software solely for your own internal business purposes. Neither the software not the Online Service maybe used to provide third party training or as a service bureau for any third parties. You agree to use the Online Service and the software strictly in accordance with the terms and conditions of JMI Brokers LTD Customer Account Agreement, as amended from time to time. You also agree to be bound by any rules, procedures and conditions established by JMI Brokers LTD concerning the use of the Online Service provided by JMI Brokers LTD

<h5 class="blue">2.	ACCESS AND SECURITY</h5>
<p  >The Online Service maybe used to transmit, received and confirms execution of orders, subject to prevailing market conditions and applicable rules and regulations.</p>
<p class="left "> JMI Brokers LTD consent to your access and use in reliance upon your having adopted procedures to prevent unauthorized access to and use of the Online Service, and in any event, you agree to any financial liability for trades executed through the Online Service. You acknowledge, represent and warrant that:</p>
<li>A)	You have received a number, code or other sequence which provides access to the Online Service (the “Password”).</li>
<li>B)	You are the sole and exclusive owner of the password.</li>
<li>C)	You are the sole and exclusive owner of any identification number or Login number(the “Login”). </li>


<li>D)	You accept full responsibility for use and protection of the Password and the Login as well as or any transaction occurring in account opened, held or accessed through the Login and \ or Password. You accept responsibility for the monitoring of your account(s).</li>
<li>You will immediately notify JMI Brokers LTD in writing if you become aware of any of the following:</li>

<li>A)	Any loss, theft or unauthorized use of your Password(s), Login and\or account number(s).</li>
<li>B)	Any failure by you to receive a massage indicating that an order was received and\or executed.</li>
<li>C)	Any failure by you to receive an accurate confirmation of an execution.</li>
<li>D)	Any receipt of confirmation of an order and\or execution which you did not place.</li>
<li>E)	Any inaccurate information in your account balances, positions, or transaction history.</li>

<h5 class="blue">3.	RISKS OF ONLINE TRADING</h5>
<p  >Your access to the Online Service, or any portion thereof, maybe restricted or unavailable during periods of peak demands, extreme market volatility, systems upgrades or other reasons.</p>
<p  >JMI Brokers LTD makes no express or implied representations or warranties to you regarding the usability, condition or operation thereof. We do not warrant that access to or use of the Online Service will be uninterrupted or error free or that the Online Service will meet any particular criteria of performance or quality. Under no circumstances including negligence, shall JMI Brokers LTD or anyone else involved in creating, producing, delivering or managing that Online Service be liable for any direct, indirect incidental, special or consequential damages that result from the use of or inability to use the Online Service, or out of any breech of any warranty, including, without limitation, those for business interruption or loss of profits. You expressly agree that your use of the Online Service is of your sole risk, you assume full responsibility and risk of loss resulting from use of, or materials obtained through, the Online Service, neither we nor any of our directors, officers, employees ,agents, contractors, affiliates, third party vendors, facilities, information providers, licensors, exchanges, clearing organizations or other suppliers providing data, information, or services, warrant that the Online Service will be uninterrupted or error free; nor do we make any warranty as to the results that maybe obtained from the use of the Online Service or as to the timeliness, sequence, accuracy, completeness, reliability or content of any information, service, or transaction provided through the Online Service. In the event that your access to the Online Service, or any portion thereof, is restricted unavailable, you agree to use other means to place your orders or access information, such as calling JMI Brokers LTD representative. By placing an order through the Online Service, you acknowledge that your order may not be reviewed by a registered representative prior to execution, you agree that JMI Brokers LTD is not liable to you for any losses, lost opportunities or increased commissions that may result from your inability to use the Online Service to place order or access information.</p>


<h5 class="blue">4.	MARKET DATA AND INFORMATION</h5>
<p  >Neither we nor any provider shall be liable in any way to you or to any other person for: a) Any inaccuracy, error or delay in, or omission of any such data, information or message or the transmission or delivery of any such data, information or message; or b) Any loss or damage arising from or occasioned by any such inaccuracy, error, delay, omission, non-performance, interruption in any such data, information or message, due to either to any negligent act or
omission or to any condition of force majeure or any other cause , whether or not within our or any provider’s control. We shall not be deemed to have received any order or communication transmitted electronically by you until we have actual knowledge of such order or communication</p>

<h5 class="blue">5.	ADDITIONAL IMPORTANT INFORMATION AND DISCLAIMERS REGARDING EXPERT ADVISORS</h5>
<p  >The expert advisors are intended merely as a tool for implementing technical ideas that can be incorporated into a personally designed trading strategy or system for experienced traders only. No support, technical, advisory or otherwise, is offered by JMI Brokers LTD in their usage. Use of the Expert Advisors is entirely at your own risk and you acknowledge & understand that JMI Brokers LTD make no warranties or representations concerning the use of Expert Advisors and that JMI Brokers LTD . Does not, by implication or otherwise, endorse or approve of the use of the Expert Advisors & shall not be responsible for any loss to you occasioned by their usage.</p>

<h5 class="blue">6.	REPRESENTATIONS</h5>
<p  >You acknowledge that from time to time, and for any reason, the Online Service may not be operational or otherwise unavailable for your use due to servicing, hardware malfunction, software defect, service or transmission interruption or other cause, and you agree to hold us and any provider harmless from liability of any damage which results from the unavailability of the Online Service. You acknowledge that you have alternative arrangements which will remain in place for the transmission and execution of your orders, in the event, for any reason, circumstances prevent the transmission and execution of all, or any portion of, your orders through the Online Service. You represent and warrant that you are fully authorized to inter this Agreement and under no legal disability which prevent you from trading and that you are & shall remain in compliance with all laws, rules and regulations applicable to your business. You agree that you are familiar with and will abide by any rules or procedures adopted by us and any provider in connection with use of the Online Service & you have provided necessary training in its use. You shall not (and shall not permit any third party) to copy, use analyze, modify, decompile, disassemble, reverse engineer, translate or convert any software provided to you in connection with use of the Online Service or distribute the software or the Online Service to any other third party.</p>

<h5 class="blue">7.	TERMINATION</h5>
<p  >We may, at our sole discretion, terminate or restrict your access to the Online Service and may terminate this Agreement at any time. Upon termination, any software license granted to you herein shall automatically terminate.</p>


<h5 class="blue">8.	INDEMNITY</h5>
<p  >You agree to indemnify & hold harmless us & each provider & their respective principles, Affiliates &agents from and against all claims, demands, proceedings, suits and all losses (direct,
indirect or otherwise), liabilities costs and expenses (including attorney fees and disbursements),paid in settlement, incurred or suffered by us and\or a providers and\or our or their respective principals, affiliates & agents arising from or relating to your use of the Online Service or the transactions contemplated hereunder. This indemnity provision shall survive termination of this Agreement.</p>

<h5 class="blue">9.	MISCELLANEOUS</h5>
<p  >You may not amend the terms of this Agreement. We may amend the terms of this Agreement upon notice to you (including electronic delivery). By continued access to and use of the Online Service, you agree to any such amendments to this Agreement. This Agreement us the entire Agreement between the parties relating to the subject hereof, and, except with respect to the Customer Account Agreement between the parties, all prior negotiations and understandings between the parties, whether written or oral, are hereby merged into this Agreement. Nothing in this Agreement shall be deemed to supersede or modify a party’s right and obligations under the Agreement</p>

<p  style="display:none;">* JMI Brokers LTD will not cover any profits or losses that may occur in any client account if market slip up or down more then 300 pips in 24 hours.</p>
<hr class="hr">
<h5 style="font-weight: bold; display: flex;align-items: center;margin:0px;" class=""><img loading="lazy" style="margin-right: 5px;" src="/assets/m/img/arrow.png"> Contact us</h5>
<p class="bold blue" style="margin:0px 0px 20px 25px;">JMI Brokers LTD</p>
<ul id="bottomUl">
<li>Address:  <span >1276, Govant Building, Kumul Highway, Port Vila, Republic of Vanuatu:</span></li>
<li>Phone no: <span>+678 24404</span></li>
<li>Fax  no:  <span>+678 23693</span></li>
<li>Website:  <span><a href="https://www.jmibrokers.com">www.jmibrokers.com</a></span></li>
</ul>

                      </p>

                      </div>
                      <div class="col-sm-12" >
                        <div class="col-sm-8" >
                          <div class="col-sm-8  ">
                              <div class="controls" style-=" text-align: center; ">
                                   <label style="margin:5px 0px;"> <input type="checkbox" value="0" required/> I agree the terms and conditions</label>

                              </div>
                          </div>
                      </div>


                    </div>
                    <br />

                </div>
                <div class="row" >
                  <div class="col-sm-8" >
                    <label class="col-sm-4"></label>
                    <div class="col-sm-8 ">
                        <div class="controls">
                            <input type="number" class="form-control" name="account_radio_type" value="1" required style="display:none;"/>


                             <input class="btn btn-success form-control" type="submit" id="submit" value="Open Account" />

                        </div>
                    </div>
                  </div>
                </div>
            {!! Form::close() !!}

            <?PHP } ?>


               </div>



            </div>


            <script>

            $('a.btn-success').click(function(){
            $('.package').css({
               "border":"unset"
            });
            $("a.btn-success").text("Select Now");
            $("a.btn-success").css({
                "opacity": "1",
                "cursor": "pointer"
            });

            $(this).closest('.package').css({
               "border":"2px solid #0059b2"
            });
            $(this).text("Selected");
            $(this).css({
                "opacity": "0.6",
              "cursor": "not-allowed"

            });
            $("#account_group").val($(this).attr('val'));
			$('#account_group option[value='+$(this).attr('val')+']').attr('selected','selected');
            });

			function accountGroup()
			{
				var accountgroup = $("#account_group").val();
				$('a.btn-success[val='+accountgroup+']').click();
			}
            </script>

        </div>


    </div>

</div>

<br>



         <!--End content-->
            </div>
        </div>

    </div>


@stop
