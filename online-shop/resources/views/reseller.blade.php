@extends('main.mainOther')

@section('title', 'Aqwam')

@section('body')

<div class="container container-240">
          <div class="boxDaftarLG">
          <form class="" action="/registercust" method="post">
          @csrf
            <div class="text-center " style="padding: 40px 0;">
              <h1 class="display-3">Daftar Reseller</h1>
            </div>
            <div style="width:100%;">
              <div class="conUploadXL">
                <center>
                  <div class="file-drop-area">
                    <br>
                    <br>
                    <br>
                    <p class="fake-btn">Pilih atau tarik dan letakkan foto KTP disini</p>
                    <p class="file-msg"> - </p>
                    <input class="file-input" type="file">
                  </div>
                </center>
                <!-- <input class=" mt-1 btn btn-success w-100" type="submit" name="Unggah" value="Unggah"> -->
              </div>
              <div class="w-100" style="padding:10px;height:300px;overflow:auto;border: 1px solid #a7a7a7;border-radius: 5px;background:white;margin:20px 0 5px;">
                <p style="text-align:justify">
                  <?php
                   echo nl2br('SECTION 11 CONTAINS A BINDING ARBITRATION AGREEMENT AND CLASS ACTION WAIVER. IT AFFECTS HOW DISPUTES ARE RESOLVED. PLEASE READ IT. IF YOU LIVE IN THE PROVINCE OF QUEBEC (CANADA) OR THE EUROPEAN UNION, SECTION 11 DOES NOT APPLY TO YOU.

 1. REGISTRATION AS A SUBSCRIBER; APPLICATION OF TERMS TO YOU; YOUR ACCOUNT ⏶

 Steam is an online service offered by Valve.

 You become a subscriber of Steam ("Subscriber") by completing the registration of a Steam user account. This Agreement takes effect as soon as you indicate your acceptance of these terms. You may not become a subscriber if you are under the age of 13. Steam is not intended for children under 13 and Valve will not knowingly collect personal information from children under the age of 13.

 A. Contracting Party

 For any interaction with Steam your contractual relationship is with Valve. Except as otherwise indicated at the time of the transaction (such as in the case of purchases from another Subscriber in a Subscription Marketplace), any transactions for Subscriptions (as defined below) you make on Steam are being made from Valve.

 B. Subscriptions; Content and Services

 As a Subscriber you may obtain access to certain services, software and content available to Subscribers. The Steam client software and any other software, content, and updates you download or access via Steam, including but not limited to Valve or third-party video games and in-game content, software associated with Hardware and any virtual items you trade, sell or purchase in a Steam Subscription Marketplace are referred to in this Agreement as "Content and Services;" the rights to access and/or use any Content and Services accessible through Steam are referred to in this Agreement as "Subscriptions."

 Each Subscription allows you to access particular Content and Services. Some Subscriptions may impose additional terms specific to that Subscription ("Subscription Terms") (for example, an end user license agreement specific to a particular game, or terms of use specific to a particular product or feature of Steam). Also, additional terms (for example, payment and billing procedures) may be posted on http://www.steampowered.com or within the Steam service ("Rules of Use"). Rules of Use include the Steam Online Conduct Rules http://steampowered.com/index.php?area=online_conduct and the Steam Refund Policy http://store.steampowered.com/steam_refunds. The Subscription Terms, the Rules of Use, and the Valve Privacy Policy (which can be found at http://www.valvesoftware.com/privacy.htm) are binding on you once you indicate your acceptance of them or of this Agreement, or otherwise become bound by them as described in Section 8 (Amendments to this Agreement).

 C. Your Account

 When you complete Steam’s registration process, you create a Steam account ("Account"). Your Account may also include billing information you provide to Valve for the purchase of Subscriptions, Content and Services and any physical goods offered for purchase through Steam (“Hardware”). You may not reveal, share or otherwise allow others to use your password or Account except as otherwise specifically authorized by Valve. You are responsible for the confidentiality of your login and password and for the security of your computer system. Valve is not responsible for the use of your password and Account or for all of the communication and activity on Steam that results from use of your login name and password by you, or by any person to whom you may have intentionally or by negligence disclosed your login and/or password in violation of this confidentiality provision. Unless it results from Valve’s negligence or fault, Valve is not responsible for the use of your Account by a person who fraudulently used your login and password without your permission. If you believe that the confidentiality of your login and/or password may have been compromised, you must notify Valve via the support form (https://support.steampowered.com/newticket.php) without any delay.

 Your Account, including any information pertaining to it (e.g.: contact information, billing information, Account history and Subscriptions, etc.), is strictly personal. You may therefore not sell or charge others for the right to use your Account, or otherwise transfer your Account, nor may you sell, charge others for the right to use, or transfer any Subscriptions other than if and as expressly permitted by this Agreement (including any Subscription Terms or Rules of Use) or as otherwise specifically permitted by Valve.

 D. Payment Processing

 Payment processing related to Content and Services and/or Hardware purchased on Steam is performed by either Valve Corporation directly or by Valve’s fully owned subsidiary Valve GmbH on behalf of Valve Corporation depending on the type of payment method used. If your card was issued outside the United States, your payment may be processed via a European acquirer by Valve GmbH on behalf of Valve Corporation. For any other type of purchases, payment will be collected by Valve Corporation directly. In any case, delivery of Content and Services as well as Hardware is performed by Valve Corporation.

 2. LICENSES ⏶

 A. General Content and Services License

 Steam and your Subscription(s) require the download and installation of Content and Services onto your computer. Valve hereby grants, and you accept, a non-exclusive license and right, to use the Content and Services for your personal, non-commercial use (except where commercial use is expressly allowed herein or in the applicable Subscription Terms). This license ends upon termination of (a) this Agreement or (b) a Subscription that includes the license. The Content and Services are licensed, not sold. Your license confers no title or ownership in the Content and Services. To make use of the Content and Services, you must have a Steam Account and you may be required to be running the Steam client and maintaining a connection to the Internet.

 For reasons that include, without limitation, system security, stability, and multiplayer interoperability, Steam may need to automatically update, pre-load, create new versions of or otherwise enhance the Content and Services and accordingly, the system requirements to use the Content and Services may change over time. You consent to such automatic updating. You understand that this Agreement (including applicable Subscription Terms) does not entitle you to future updates, new versions or other enhancements of the Content and Services associated with a particular Subscription, although Valve may choose to provide such updates, etc. in its sole discretion.

 B. Beta Software License

 Valve may from time to time make software accessible to you via Steam prior to the general commercial release of such software ("Beta Software"). You are not required to use Beta Software, but if Valve offers it, you may elect to use it under the following terms. Beta Software will be deemed to consist of Content and Services, and each item of Beta Software provided will be deemed a Subscription for such Beta Software, with the following provisions specific to Beta Software:

 Your right to use the Beta Software may be limited in time, and may be subject to additional Subscription Terms;
 Valve or any Valve affiliate may request or require that you provide suggestions, feedback, or data regarding your use of the Beta Software, which will be deemed User Generated Content under Section 6 (User Generated Content) below; and
 In addition to the waivers and limitations of liability for all Software under Section 7 (Disclaimers; Limitations on Liability; No Guarantees; Limited Warranty & Agreement) below as applicable, you specifically acknowledge that Beta Software is only released for testing and improvement purposes, in particular to provide Valve with feedback on the quality and usability of the Beta Software, and therefore contains errors, is not final and may create incompatibilities or damage to your computer, data, and/or software. If you decide to install and/or use Beta Software, you shall only use it in compliance with its purposes, i.e. for testing and improvement purposes and in any case not on a system or for purposes where the malfunction of the Beta Software can cause any kind of damage. In particular, maintain full backups of any system that you choose to install Beta Software on.
 C. License to Use Valve Developer Tools

 Your Subscription(s) may include access to various Valve tools that can be used to create content ("Developer Tools"). Some examples include: the Valve software development kit (the "SDK") for a version of the computer game engine known as "Source" (the "Source Engine") and the associated Valve Hammer editor, The Source® Filmmaker Software, or in-game tools through which you can edit or create derivative works of a Valve game. Particular Developer Tools (for example, The Source® Filmmaker Software) may be distributed with separate Subscription Terms that are different from the rules set forth in this Section. Except as set forth in any separate Subscription Terms applicable to the use of a particular Developer Tool, you may use the Developer Tools, and you may use, reproduce, publish, perform, display and distribute any content you create using the Developer Tools, however you wish, but solely on a non-commercial basis.

 If you would like to use the Source Engine SDK or other Valve Developer Tools for commercial use, please contact Valve at sourceengine@valvesoftware.com.

 D. License to Use Valve Game Content in Fan Art.

 Valve appreciates the community of Subscribers that creates fan art, fan fiction, and audio-visual works that reference Valve games ("Fan Art"). You may incorporate content from Valve games into your Fan Art. Except as otherwise set forth in this Section or in any Subscription Terms, you may use, reproduce, publish, perform, display and distribute Fan Art that incorporates content from Valve games however you wish, but solely on a non-commercial basis.

 If you incorporate any third-party content in any Fan Art, you must be sure to obtain all necessary rights from the owner of that content.

 Commercial use of some Valve game content is permitted via features such as Steam Workshop or a Steam Subscription Marketplace. Terms applicable to that use are set forth in Sections 3.D. and 6.B. below and in any Subscription Terms provided for those features.

 To view the Valve video policy containing additional terms covering the use of audio-visual works incorporating Valve intellectual property or created with The Source® Filmmaker Software, please click here: http://www.valvesoftware.com/videopolicy.html

 E. License to Use Valve Dedicated Server Software

 Your Subscription(s) may contain access to the Valve Dedicated Server Software. If so, you may use the Valve Dedicated Server Software on an unlimited number of computers for the purpose of hosting online multiplayer games of Valve products. If you wish to operate the Valve Dedicated Server Software, you will be solely responsible for procuring any Internet access, bandwidth, or hardware for such activities and will bear all costs associated with your use.

 F. Ownership of Content and Services

 All title, ownership rights and intellectual property rights in and to the Content and Services and any and all copies thereof, are owned by Valve and/or its or its affiliates’ licensors. All rights are reserved, except as expressly stated herein. The Content and Services are protected by copyright laws, international copyright treaties and conventions and other laws. The Content and Services contain certain licensed materials and Valve’s and its affiliates’ licensors may protect their rights in the event of any violation of this Agreement.

 G. Restrictions on Use of Content and Services

 You may not use the Content and Services for any purpose other than the permitted access to Steam and your Subscriptions, and to make personal, non-commercial use of your Subscriptions, except as otherwise permitted by this Agreement or applicable Subscription Terms. Except as otherwise permitted under this Agreement (including any Subscription Terms or Rules of Use), or under applicable law notwithstanding these restrictions, you may not, in whole or in part, copy, photocopy, reproduce, publish, distribute, translate, reverse engineer, derive source code from, modify, disassemble, decompile, create derivative works based on, or remove any proprietary notices or labels from the Content and Services or any software accessed via Steam without the prior consent, in writing, of Valve.

 You are entitled to use the Content and Services for your own personal use, but you are not entitled to: (i) sell, grant a security interest in or transfer reproductions of the Content and Services to other parties in any way, nor to rent, lease or license the Content and Services to others without the prior written consent of Valve, except to the extent expressly permitted elsewhere in this Agreement (including any Subscription Terms or Rules of Use); (ii) host or provide matchmaking services for the Content and Services or emulate or redirect the communication protocols used by Valve in any network feature of the Content and Services, through protocol emulation, tunneling, modifying or adding components to the Content and Services, use of a utility program or any other techniques now known or hereafter developed, for any purpose including, but not limited to network play over the Internet, network play utilizing commercial or non-commercial gaming networks or as part of content aggregation networks, websites or services, without the prior written consent of Valve; or (iii) exploit the Content and Services or any of its parts for any commercial purpose, except as expressly permitted elsewhere in this Agreement (including any Subscription Terms or Rules of Use).

 3. BILLING, PAYMENT AND OTHER SUBSCRIPTIONS ⏶

 All charges incurred on Steam, and all purchases made with the Steam Wallet, are payable in advance and final, except as described in Sections 3.I and 7 below.

 A. Payment Authorization

 When you provide payment information to Valve or to one of its payment processors, you represent to Valve that you are the authorized user of the card, PIN, key or account associated with that payment, and you authorize Valve to charge your credit card or to process your payment with the chosen third-party payment processor for any Subscription, Steam Wallet funds, Hardware or other fees incurred by you. Valve may require you to provide your address or other information in order to meet its obligations under applicable tax law.

 For Subscriptions purchased based on an agreed usage period, where recurring payments are made in exchange for continued use ("Recurring Payment Subscriptions"), by continuing to use the Recurring Payment Subscription you agree and reaffirm that Valve is authorized to charge your credit card (or your Steam Wallet, if funded), or to process your payment with any other applicable third-party payment processor, for any applicable recurring payment amounts. If you have purchased any Recurring Payment Subscriptions, you agree to notify Valve promptly of any changes to your credit card account number, its expiration date and/or your billing address, or your PayPal or other payment account number, and you agree to notify Valve promptly if your credit card or PayPal or other payment account expires or is cancelled for any reason.

 If your use of Steam is subject to any type of use or sales tax, then Valve may also charge you for those taxes, in addition to the Subscription or other fees published in the Rules of Use. The European Union VAT ("VAT") tax amounts collected by Valve reflect VAT due on the value of any Content and Services, Hardware or Subscription.

 You agree that you will not use IP proxying or other methods to disguise the place of your residence, whether to circumvent geographical restrictions on game content, to purchase at pricing not applicable to your geography, or for any other purpose. If you do this, Valve may terminate your access to your Account.

 B. Responsibility for Charges Associated With Your Account

 As the Account holder, you are responsible for all charges incurred, including applicable taxes, and all purchases made by you or anyone that uses your Account, including your family or friends. If you cancel your Account, Valve reserves the right to collect fees, surcharges or costs incurred before cancellation. Any delinquent or unpaid Accounts must be settled before Valve will allow you to register again.

 C. Steam Wallet

 Steam may make available an account balance associated with your Account (the "Steam Wallet"). The Steam Wallet is neither a bank account nor any kind of payment instrument. It functions as a prepaid balance to purchase Content and Services. You may place funds in your Steam Wallet up to a maximum amount determined by Valve, by credit card, prepaid card, promotional code, or any other payment method accepted by Steam. Within any twenty-four (24) hour period, the total amount stored in your Steam Wallet plus the total amount spent out of your Steam Wallet, in the aggregate, may not exceed US$2,000 or its equivalent in your applicable local currency -- attempted deposits into your Steam Wallet that exceed this threshold may not be credited to your Steam Wallet until your activity falls below this threshold. Valve may change or impose different Steam Wallet balance and usage limits from time to time.

 You will be notified by e-mail of any change to the Steam Wallet balance and usage limits within sixty (60) days before the entry into force of the change. Your continued use of your Steam Account more than thirty (30) days after the entry into force of the changes will constitute your acceptance of the changes. If you don’t agree to the changes, your only remedy is to terminate your Steam Account or to cease use of your Steam Wallet. Valve shall not have any obligation to refund any credits remaining on your Steam Wallet in this case.

 You may use Steam Wallet funds to purchase Subscriptions, including by making in-game purchases where Steam Wallet transactions are enabled, and Hardware. Subject to Section 3.I, funds added to the Steam Wallet are non-refundable and non-transferable. Steam Wallet funds do not constitute a personal property right, have no value outside Steam and can only be used to purchase Subscriptions and related content via Steam (including but not limited to games and other applications offered through the Steam Store, or in a Steam Subscription Marketplace) and Hardware. Steam Wallet funds have no cash value and are not exchangeable for cash. Steam Wallet funds that are deemed unclaimed property may be turned over to the applicable authority.

 D. Trading and Sales of Subscriptions Between Subscribers

 Steam may include one or more features or sites that allow Subscribers to trade, sell or purchase certain types of Subscriptions (for example, license rights to virtual items) with, to or from other Subscribers ("Subscription Marketplaces"). An example of a Subscription Marketplace is the Steam Community Market. By using or participating in Subscription Marketplaces, you authorize Valve, on its own behalf or as an agent or licensee of any third-party creator or publisher of the applicable Subscriptions in your Account, to transfer those Subscriptions from your Account in order to give effect to any trade or sale you make.

 Valve may charge a fee for trades or sales in a Subscription Marketplace. Any fees will be disclosed to you prior to the completion of the trade or sale.

 If you complete a trade, sale or purchase in a Subscription Marketplace, you acknowledge and agree that you are responsible for taxes, if any, which may be due with respect to your transactions, including sales or use taxes, and for compliance with applicable tax laws. Proceeds from sales you make in a Subscription Marketplace may be considered income to you for income tax purposes. You should consult with a tax specialist to determine your tax liability in connection with your activities in any Subscription Marketplace.

 You understand and acknowledge that Valve may decide to cease operation of any Subscription Marketplace, change the fees that it charges or change the terms or features of the Steam Subscription Marketplace. Valve shall have no liability to you because of any inability to trade Subscriptions in the Steam Trading Marketplace, including because of discontinuation or changes in the terms, features or eligibility requirements of any Subscription Marketplace.

 You also understand and acknowledge that Subscriptions traded, sold or purchased in any Subscription Marketplace are license rights, that you have no ownership interest in such Subscriptions, and that Valve does not recognize any transfers of Subscriptions (including transfers by operation of law) that are made outside of Steam.

 E. Retail Purchase

 Valve may offer or require a Subscription for purchasers of retail packaged product versions or OEM versions of Valve products. The "CD-Key" or "Product Key" accompanying such versions is used to activate your Subscription.

 F. Steam Authorized Resellers

 You may purchase a Subscription through an authorized reseller of Valve. The "Product Key" accompanying such purchase will be used to activate your Subscription. If you purchase a Subscription from an authorized reseller of Valve, you agree to direct all questions regarding the Product Key to that reseller.

 G. Free Subscriptions

 In some cases, Valve may offer a free Subscription to certain services, software and content. As with all Subscriptions, you are always responsible for any Internet service provider, telephone, and other connection fees that you may incur when using Steam, even when Valve offers a free Subscription.

 H. Third-Party Sites

 Steam may provide links to other third-party sites. Some of these sites may charge separate fees, which are not included in and are in addition to any Subscription or other fees that you may pay to Valve. Steam may also provide access to third-party vendors, who provide content, goods and/or services on Steam or the Internet. Any separate charges or obligations you incur in your dealings with these third parties are your responsibility. Valve makes no representations or warranties, either express or implied, regarding any third party site. In particular, Valve makes no representation or warranty that any service or subscription offered via third-party vendors will not change or be suspended or terminated.

 I. Refunds and Right of Withdrawal

 Without prejudice to any statutory rights you may have, you can request a refund for your purchases on Steam in accordance with the terms of Valve’s Refund Policy http://store.steampowered.com/steam_refunds/.

 For European Union consumers:

 EU law provides a statutory right to withdraw from certain contracts for physical merchandise and for the purchase of digital content. You can find more information about the extent of your statutory right to withdraw and the ways you can exercise it on this page: https://support.steampowered.com/kb_article.php?ref=8620-QYAL-4516.

 4. ONLINE CONDUCT, CHEATING AND PROCESS TAMPERING ⏶

 Your online conduct and interaction with other Subscribers should be guided by common sense and basic etiquette. They must notably comply with the Steam Online Conduct Rules, to be found at http://steampowered.com/index.php?area=online_conduct. Depending on terms of use imposed by third parties who host particular games or other services, additional requirements may also be provided in the Subscription Terms applicable to a particular Subscription.

 Steam and the Content and Services may include functionality designed to identify software or hardware processes or functionality that may give a player an unfair competitive advantage when playing multiplayer versions of any Content and Services or modifications of Content and Services ("Cheats"). You agree that you will not create Cheats or assist third parties in any way to create or use Cheats. You agree that you will not directly or indirectly disable, circumvent, or otherwise interfere with the operation of software designed to prevent or report the use of Cheats.

 You agree that you will not tamper with the execution of Steam or Content and Services unless otherwise authorized by Valve. You acknowledge and agree that either Valve or any host of an online multiplayer game distributed through Steam ("External Host") may refuse to allow you to participate in certain online multiplayer games if you use Cheats or tamper with the execution of Steam or the Content and Services.

 Further, you acknowledge and agree that External Hosts may report your use of Cheats or unauthorized process tampering to Valve, and Valve may communicate your history of use thereof to External Hosts within the boundaries of the Steam Privacy Policy.

 Valve may terminate your Account or a particular Subscription for any conduct or activity that is illegal, constitutes a Cheat, or otherwise negatively affects the enjoyment of Steam by other Subscribers. You acknowledge that Valve is not required to provide you notice before terminating your Subscription(s) and/or Account.

 You may not use Cheats, automation software (bots), mods, hacks, or any other unauthorized third-party software, to modify or automate any Subscription Marketplace process or the process of Steam account creation.

 5. THIRD-PARTY CONTENT ⏶

 In regard to all Subscriptions, Content and Services that are not authored by Valve, Valve does not screen such third-party content available on Steam or through other sources. Valve assumes no responsibility or liability for such third party content. Some third-party application software is capable of being used by businesses for business purposes - however, you may only acquire such software via Steam for private personal use.

 6. USER GENERATED CONTENT ⏶

 A. General Provisions

 Steam provides interfaces and tools for you to be able to generate content and make it available to other users and/or to Valve at your sole discretion. "User Generated Content" means any content you make available to other users through your use of multi-user features of Steam, or to Valve or its affiliates through your use of the Content and Services or otherwise.

 When you upload your content to Steam to make it available to other users and/or to Valve, you grant Valve and its affiliates the worldwide, non-exclusive right to use, reproduce, modify, create derivative works from, distribute, transmit, transcode, translate, broadcast, and otherwise communicate, and publicly display and publicly perform, your User Generated Content, and derivative works of your User Generated Content, for the purpose of the operation, distribution, incorporation as part of and promotion of the Steam service, Steam games or other Steam offerings, including Subscriptions. This license is granted to Valve as the content is uploaded on Steam for the entire duration of the intellectual property rights. It may be terminated if Valve is in breach of the license and has not cured such breach within fourteen (14) days from receiving notice from you sent to the attention of the Valve Legal Department at the applicable Valve address noted on this Privacy Policy page. The termination of said license does not affect the rights of any sub-licensees pursuant to any sub-license granted by Valve prior to termination of the license. Valve is the sole owner of the derivative works created by Valve from your User Generated Content, and is therefore entitled to grant licenses on these derivative works. If you use Valve cloud storage, you grant us a license to store your information as part of that service. Valve may place limits on the amount of storage you may use.

 If you provide Valve with any feedback or suggestions about Steam, the Content and Services, or any Valve products, Hardware or services, Valve is free to use the feedback or suggestions however it chooses, without any obligation to account to you.

 B. Content Uploaded to the Steam Workshop

 Some games or applications available on Steam ("Workshop-Enabled Apps") allow you to create User Generated Content based on or using the Workshop-Enabled App, and to submit that User Generated Content (a “Workshop Contribution”) to one or more Steam Workshop web pages. Workshop Contributions can be viewed by the Steam community, and for some categories of Workshop Contributions users may be able to interact with, download or purchase the Workshop Contribution. In some cases, Workshop Contributions may be considered for incorporation by Valve or a third-party developer into a game or into a Subscription Marketplace.

 You understand and agree that Valve is not obligated to use, distribute, or continue to distribute copies of any Workshop Contribution and reserves the right, but not the obligation, to restrict or remove Workshop Contributions for any reason.

 Specific Workshop-Enabled Apps or Workshop web pages may contain special terms (“App-Specific Terms”) that supplement or change the terms set out in this Section. In particular, where Workshop Contributions are distributed for a fee, App-Specific Terms will address how revenue may be shared. Unless otherwise specified in App-Specific Terms (if any), the following general rules apply to Workshop Contributions.

 Workshop Contributions are Subscriptions, and therefore you agree that any Subscriber receiving distribution of your Workshop Contribution will have the same rights to use your Workshop Contribution (and will be subject to the same restrictions) as are set out in this Agreement for any other Subscriptions.
 Notwithstanding the license described in Section 6.A., Valve will only have the right to modify or create derivative works from your Workshop Contribution in the following cases: (a) Valve may make modifications necessary to make your Contribution compatible with Steam and the Workshop functionality or user interface, and (b) Valve or the applicable developer may make modifications to Workshop Contributions that are accepted for in-Application distribution as it deems necessary or desirable to enhance gameplay.
 You may, in your sole discretion, choose to remove a Workshop Contribution from the applicable Workshop pages. If you do so, Valve will no longer have the right to use, distribute, transmit, communicate, publicly display or publicly perform the Workshop Contribution, except that (a) Valve may continue to exercise these rights for any Workshop Contribution that is accepted for distribution in-game or distributed in a manner that allows it to be used in-game, and (b) your removal will not affect the rights of any Subscriber who has already obtained access to a copy of the Workshop Contribution.
 Except where otherwise provided in App-Specific Terms, you agree that Valve’s consideration of your Workshop Contribution is your full compensation, and you are not entitled to any other rights or compensation in connection with the rights granted to Valve and to other Subscribers.

 C. Promotions and Endorsements

 If you use Steam services (e.g. the Steam Curators’ Lists or the Steam Broadcasting service) to promote or endorse a product, service or event in return for any kind of consideration from a third party (including non-monetary rewards such as free games), you must clearly indicate the source of such consideration to your audience.

 D. Representations and Warranties

 You represent and warrant to us that you have sufficient rights in all User Generated Content to grant Valve and other affected parties the licenses described under A. and B. above or in any license terms specific to the applicable Workshop-Enabled App or Workshop page. This includes, without limitation, any kind of intellectual property rights or other proprietary or personal rights affected by or included in the User Generated Content. In particular, with respect to Workshop Contributions, you represent and warrant that the Workshop Contribution was originally created by you (or, with respect to a Workshop Contribution to which others contributed besides you, by you and the other contributors, and in such case that you have the right to submit such Workshop Contribution on behalf of those other contributors).

 You furthermore represent and warrant that the User Generated Content, your submission of that Content, and your granting of rights in that Content does not violate any applicable contract, law or regulation.

 7. DISCLAIMERS; LIMITATION OF LIABILITY; NO GUARANTEES; LIMITED WARRANTY & AGREEMENT ⏶

 THIS SECTION 7 DOES NOT APPLY TO EU SUBSCRIBERS.

 FOR AUSTRALIAN SUBSCRIBERS, THIS SECTION 7 DOES NOT EXCLUDE, RESTRICT OR MODIFY THE APPLICATION OF ANY GUARANTEE, RIGHT OR REMEDY THAT CANNOT BE SO EXCLUDED, RESTRICTED OR MODIFIED, INCLUDING THOSE CONFERRED BY THE AUSTRALIAN CONSUMER LAW (ACL). UNDER THE ACL, GOODS COME WITH GUARANTEES INCLUDING A GUARANTEE THAT GOODS ARE OF ACCEPTABLE QUALITY. IF THERE IS A FAILURE OF THIS GUARANTEE, YOU ARE ENTITLED TO A REMEDY (WHICH MAY INCLUDE HAVING THE GOODS REPAIRED OR REPLACED OR A REFUND). IF A REPAIR OR REPLACEMENT CANNOT BE PROVIDED OR THERE IS A MAJOR FAILURE, YOU ARE ENTITLED TO A REFUND.
 FOR NEW ZEALAND SUBSCRIBERS, THIS SECTION 7 DOES NOT EXCLUDE, RESTRICT OR MODIFY THE APPLICATION OF ANY RIGHT OR REMEDY THAT CANNOT BE SO EXCLUDED, RESTRICTED OR MODIFIED INCLUDING THOSE CONFERRED BY THE NEW ZEALAND CONSUMER GUARANTEES ACT 1993. UNDER THIS ACT ARE GUARANTEES WHICH INCLUDE THAT GOODS AND SERVICES ARE OF ACCEPTABLE QUALITY. IF THIS GUARANTEE IS NOT MET THERE ARE ENTITLEMENTS TO HAVE THE SOFTWARE REMEDIED (WHICH MAY INCLUDE REPAIR, REPLACEMENT OR REFUND). IF A REMEDY CANNOT BE PROVIDED OR THE FAILURE IS OF A SUBSTANTIAL CHARACTER, THE ACT PROVIDES FOR A REFUND.
 Prior to acquiring a Subscription, you should consult the product information made available on Steam, including Subscription description, minimum technical requirements, and user reviews.

 A. DISCLAIMERS

 TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, VALVE AND ITS AFFILIATES AND SERVICE PROVIDERS EXPRESSLY DISCLAIM (I) ANY WARRANTY FOR STEAM, THE CONTENT AND SERVICES, AND THE SUBSCRIPTIONS, AND (II) ANY COMMON LAW DUTIES WITH REGARD TO STEAM, THE CONTENT AND SERVICES, AND THE SUBSCRIPTIONS, INCLUDING DUTIES OF LACK OF NEGLIGENCE AND LACK OF WORKMANLIKE EFFORT. STEAM, THE CONTENT AND SERVICES, THE SUBSCRIPTIONS, AND ANY INFORMATION AVAILABLE IN CONNECTION THEREWITH ARE PROVIDED ON AN "AS IS" AND "AS AVAILABLE" BASIS, "WITH ALL FAULTS" AND WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING, WITHOUT LIMITATION, THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NONINFRINGEMENT. ANY WARRANTY AGAINST INFRINGEMENT THAT MAY BE PROVIDED IN SECTION 2-312 OF THE UNITED STATES UNIFORM COMMERCIAL CODE AND/OR IN ANY OTHER COMPARABLE STATE STATUTE IS EXPRESSLY DISCLAIMED. ALSO, THERE IS NO WARRANTY OF TITLE, NON-INTERFERENCE WITH YOUR ENJOYMENT, OR AUTHORITY IN CONNECTION WITH STEAM, THE CONTENT AND SERVICES, THE SUBSCRIPTIONS, OR INFORMATION AVAILABLE IN CONNECTION THEREWITH.

 ANY WARRANTY AGAINST INFRINGEMENT THAT MAY BE PROVIDED IN SECTION 2-312 OF THE UNITED STATES UNIFORM COMMERCIAL CODE IS EXPRESSLY DISCLAIMED.

 B. LIMITATION OF LIABILITY

 TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, NEITHER VALVE, ITS LICENSORS, NOR THEIR AFFILIATES, NOR ANY OF VALVE’S SERVICE PROVIDERS, SHALL BE LIABLE IN ANY WAY FOR LOSS OR DAMAGE OF ANY KIND RESULTING FROM THE USE OR INABILITY TO USE STEAM, YOUR ACCOUNT, YOUR SUBSCRIPTIONS AND THE CONTENT AND SERVICES INCLUDING, BUT NOT LIMITED TO, LOSS OF GOODWILL, WORK STOPPAGE, COMPUTER FAILURE OR MALFUNCTION, OR ANY AND ALL OTHER COMMERCIAL DAMAGES OR LOSSES. IN NO EVENT WILL VALVE BE LIABLE FOR ANY INDIRECT, INCIDENTAL, CONSEQUENTIAL, SPECIAL, PUNITIVE OR EXEMPLARY DAMAGES, OR ANY OTHER DAMAGES ARISING OUT OF OR IN ANY WAY CONNECTED WITH STEAM, THE CONTENT AND SERVICES, THE SUBSCRIPTIONS, AND ANY INFORMATION AVAILABLE IN CONNECTION THEREWITH, OR THE DELAY OR INABILITY TO USE THE CONTENT AND SERVICES, SUBSCRIPTIONS OR ANY INFORMATION, EVEN IN THE EVENT OF VALVE’S OR ITS AFFILIATES’ FAULT, TORT (INCLUDING NEGLIGENCE), STRICT LIABILITY, OR BREACH OF VALVE’S WARRANTY AND EVEN IF IT HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. THESE LIMITATIONS AND LIABILITY EXCLUSIONS APPLY EVEN IF ANY REMEDY FAILS TO PROVIDE ADEQUATE RECOMPENSE.

 BECAUSE SOME STATES OR JURISDICTIONS DO NOT ALLOW THE EXCLUSION OR THE LIMITATION OF LIABILITY FOR CONSEQUENTIAL OR INCIDENTAL DAMAGES, IN SUCH STATES OR JURISDICTIONS, EACH OF VALVE, ITS LICENSORS, AND ITS AFFILIATES’ LIABILITY SHALL BE LIMITED TO THE FULL EXTENT PERMITTED BY LAW.

 C. NO GUARANTEES

 TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, NEITHER VALVE NOR ITS AFFILIATES GUARANTEE CONTINUOUS, ERROR-FREE, VIRUS-FREE OR SECURE OPERATION AND ACCESS TO STEAM, THE CONTENT AND SERVICES, YOUR ACCOUNT AND/OR YOUR SUBSCRIPTION(S) OR ANY INFORMATION AVAILABLE IN CONNECTION THEREWITH.

 D. LIMITED WARRANTY & AGREEMENT

 CERTAIN HARDWARE PURCHASED FROM VALVE IS SUBJECT TO A LIMITED WARRANTY & AGREEMENT, [OR DEPENDING ON YOUR LOCATION, A STATUTORY WARRANTY] WHICH IS DESCRIBED IN DETAIL HERE.

 8. AMENDMENTS TO THIS AGREEMENT ⏶

 PLEASE NOTE: If you are a consumer with place of residence in Germany, a different version of Section 8 applies to you, which is available here.

 A. Mutual Amendment

 This Agreement may at any time be mutually amended by your explicit consent to changes proposed by Valve.

 B. Unilateral Amendment

 Furthermore, Valve may amend this Agreement (including any Subscription Terms or Rules of Use) unilaterally at any time in its sole discretion. In this case, you will be notified by e-mail of any amendment to this Agreement made by Valve at least 30 (30) days before the effective date of the amendment. You can view the Agreement at any time at http://www.steampowered.com/. Your failure to cancel your Account prior to the effective date of the amendment will constitute your acceptance of the amended terms. If you don’t agree to the amendments or to any of the terms in this Agreement, your only remedy is to cancel your Account or to cease use of the affected Subscription(s). Valve shall not have any obligation to refund any fees that may have accrued to your Account before cancellation of your Account or cessation of use of any Subscription, nor shall Valve have any obligation to prorate any fees in such circumstances.

 9. TERM AND TERMINATION ⏶

 A. Term

 The term of this Agreement (the "Term") commences on the date you first indicate your acceptance of these terms, and will continue in effect until otherwise terminated in accordance with this Agreement.

 B. Termination by You

 You may cancel your Account at any time. You may cease use of a Subscription at any time or, if you choose, you may request that Valve terminate your access to a Subscription. However, Subscriptions are not transferable, and even if your access to a Subscription for a particular game or application is terminated, the original activation key will not be able to be registered to any other account, even if the Subscription was obtained in a retail store. Access to Subscriptions purchased as a part of a pack or bundle cannot be terminated individually, termination of access to one game within the bundle will result in termination of access to all games purchased in the pack. Your cancellation of an Account, or your cessation of use of any Subscription or request that access to a Subscription be terminated, will not entitle you to any refund, including of any Subscription fees. Valve reserves the right to collect fees, surcharges or costs incurred prior to the cancellation of your Account or termination of your access to a particular Subscription. In addition, you are responsible for any charges incurred to third-party vendors or content providers before your cancellation.

 C. Termination by Valve

 Valve may cancel your Account or any particular Subscription(s) at any time in the event that (a) Valve ceases providing such Subscriptions to similarly situated Subscribers generally, or (b) you breach any terms of this Agreement (including any Subscription Terms or Rules of Use). In the event that your Account or a particular Subscription is terminated or cancelled by Valve for a violation of this Agreement or improper or illegal activity, no refund, including of any Subscription fees or of any unused funds in your Steam Wallet, will be granted.

 D. Survival of Terms

 Sections 2.C., 2.D., 2.F., 2.G., 3.A., 3.B., 3.D., 3.H., and 5 - 12 will survive any expiration or termination of this Agreement.

 10. APPLICABLE LAW/MEDIATION/JURISDICTION/ATTORNEYS’ FEES ⏶

 For All Customers Outside the European Union:

 You and Valve agree that this Agreement shall be deemed to have been made and executed in the State of Washington, U.S.A., and Washington law, excluding conflict of laws principles and the Convention on Contracts for the International Sale of Goods, governs all claims arising out of or relating to: (i) any aspect of the relationship between us; (ii) this Agreement; or (iii) your use of Steam, your Account or the Content and Services; except that the U.S. Federal Arbitration Act governs arbitration as far as your country’s laws permit. Subject to Section 11 (Dispute Resolution/Binding Arbitration/Class Action Waiver) below, you and Valve agree that any claim asserted in any legal proceeding shall be commenced and maintained exclusively in any state or federal court located in King County, Washington, having subject matter jurisdiction. You and Valve hereby consent to the exclusive jurisdiction of such courts. In any dispute arising out of or relating to this Agreement, your use of Steam, your account, or the Content and Services, the prevailing party will be entitled to attorneys’ fees and expenses (except arbitration -- see Section 11.C.)

 For EU Customers:

 In the event of a dispute relating to the interpretation, the performance or the validity of the Subscriber Agreement, an amicable solution will be sought before any legal action. You can file your complaint at http://help.steampowered.com. In case of failure, you may, within one year of the failed request, have recourse to an Alternative Dispute Resolution procedure by filing an online complaint on the European Commission’s Online Dispute Resolution website: https://webgate.ec.europa.eu/odr/main/index.cfm?event=main.home.chooseLanguage.

 In the event that out-of-court dispute resolutions fail, the dispute may be brought before the competent courts.

 11. DISPUTE RESOLUTION/BINDING ARBITRATION/CLASS ACTION WAIVER ⏶

 This Section 11 shall apply to the maximum extent permitted by applicable law. IN PARTICULAR, IF YOU LIVE IN THE PROVINCE OF QUEBEC (CANADA) OR THE EUROPEAN UNION, THIS SECTION 11 DOES NOT APPLY TO YOU.

 Most user concerns can be resolved by use of our Steam support site at https://support.steampowered.com/. If Valve is unable to resolve your concerns and a dispute remains between you and Valve, this Section explains how the parties have agreed to resolve it.

 A. Must Arbitrate All Claims Except IP, Unauthorized Use, Piracy, or Theft

 YOU AND VALVE AGREE TO RESOLVE ALL DISPUTES AND CLAIMS BETWEEN US IN INDIVIDUAL BINDING ARBITRATION. THAT INCLUDES, BUT IS NOT LIMITED TO, ANY CLAIMS ARISING OUT OF OR RELATING TO: (i) ANY ASPECT OF THE RELATIONSHIP BETWEEN US; (ii) THIS AGREEMENT; OR (iii) YOUR USE OF STEAM, YOUR ACCOUNT, HARDWARE OR THE CONTENT AND SERVICES. IT APPLIES REGARDLESS OF WHETHER SUCH CLAIMS ARE BASED IN CONTRACT, TORT, STATUTE, FRAUD, UNFAIR COMPETITION, MISREPRESENTATION OR ANY OTHER LEGAL THEORY, AND INCLUDES ALL CLAIMS BROUGHT ON BEHALF OF ANOTHER PARTY.

 However, this Section 11 does not apply to the following types of claims or disputes, which you or Valve may bring in any court with jurisdiction: (i) claims of infringement or other misuse of intellectual property rights, including such claims seeking injunctive relief; and (ii) claims related to or arising from any alleged unauthorized use, piracy, or theft.

 This Section 11 does not prevent you from bringing your dispute to the attention of any federal, state, or local government agencies that can, if the law allows, seek relief from us for you.

 An arbitration is a proceeding before a neutral arbitrator, instead of before a judge or jury. Arbitration is less formal than a lawsuit in court, and provides more limited discovery. It follows different rules than court proceedings, and is subject to very limited review by courts. The arbitrator will issue a written decision and provide a statement of reasons if requested by either party. YOU UNDERSTAND THAT YOU AND VALVE ARE GIVING UP THE RIGHT TO SUE IN COURT AND TO HAVE A TRIAL BEFORE A JUDGE OR JURY.

 B. Try to Resolve Dispute Informally First

 You and Valve agree to make reasonable, good faith efforts to informally resolve any dispute before initiating arbitration. A party who intends to seek arbitration must first send the other a written notice that describes the nature and basis of the claim or dispute and sets forth the relief sought. If you and Valve do not reach an agreement to resolve that claim or dispute within 30 days after the notice is received, you or Valve may commence an arbitration. Written notice to Valve must be sent via postal mail to: ATTN: Arbitration Notice, Valve Corporation, P.O. Box 1688, Bellevue, WA 98004.

 C. Arbitration Rules and Fees

 The U.S. Federal Arbitration Act applies to this Section 11 as far as your country’s laws permit. The arbitration will be governed by the Consumer Arbitration Rules (or the Commercial Arbitration Rules, if the Consumer Arbitration rules are inapplicable) of the American Arbitration Association ("AAA") as modified by this Agreement. Rules are available at http://www.adr.org. The arbitrator is bound by the terms of this Agreement.

 The AAA will administer the arbitration. Outside the U.S., Valve will select a neutral arbitration provider that uses these or similar rules. It may be conducted through the submission of documents, by phone, or in person in the county where you live or at another mutually agreed location.

 If you seek $10,000 or less, Valve agrees to promptly reimburse your filing fee and your share if any of AAA’s arbitration costs, including arbitrator compensation, unless the arbitrator determines your claims are frivolous or were filed for harassment. Valve agrees not to seek its attorneys’ fees or costs unless the arbitrator determines your claims are frivolous or were filed for harassment. If you seek more than $10,000 and the AAA Consumer Arbitration Rules do not apply, the AAA’s arbitration costs, including arbitrator compensation, will be split between you and Valve according to the AAA Commercial Arbitration Rules.

 D. Individual Binding Arbitration Only

 YOU AND VALVE AGREE NOT TO BRING OR PARTICIPATE IN A CLASS OR REPRESENTATIVE ACTION, PRIVATE ATTORNEY GENERAL ACTION, WHISTLE BLOWER ACTION, OR CLASS, COLLECTIVE, OR REPRESENTATIVE ARBITRATION, EVEN IF AAA’s RULES WOULD OTHERWISE ALLOW ONE. THE ARBITRATOR MAY AWARD RELIEF ONLY IN FAVOR OF THE INDIVIDUAL PARTY SEEKING RELIEF AND ONLY TO THE EXTENT OF THAT PARTY’S INDIVIDUAL CLAIM. You and Valve also agree not to seek to combine any action or arbitration with any other action or arbitration without the consent of all parties to this Agreement and all other actions or arbitrations.

 This Agreement does not permit class, collective, or representative arbitration. A court has exclusive authority to rule on any assertion that it does.

 E. What Happens if Part of Section 11 Is Found Illegal or Unenforceable

 If any part of Section 11 (Dispute Resolution/Binding Arbitration/Class Action Waiver) is found to be illegal or unenforceable, the rest will remain in effect (with an arbitration award issued before any court proceeding begins), except that if a finding of partial illegality or unenforceability would allow class, collective, or representative arbitration, all of Section 11 will be unenforceable and the claim or dispute will be resolved in court.

 12. MISCELLANEOUS ⏶

 Except as otherwise expressly set forth in this Agreement, in the event that any provision of this Agreement shall be held by an arbitrator, court, or other tribunal of competent jurisdiction to be illegal or unenforceable, such provision will be enforced to the maximum extent permissible and the remaining portions of this Agreement shall remain in full force and effect. Section 11.E. governs if some parts of Section 11 (Dispute Resolution/Binding Arbitration/Class Action Waiver) are held to be illegal or unenforceable. This Agreement, including any Subscription Terms, Rules of Use, the Valve Privacy Policy, and the Valve Hardware Limited Warranty Policy, constitutes and contains the entire agreement between the parties with respect to the subject matter hereof and supersedes any prior oral or written agreements. You agree that this Agreement is not intended to confer and does not confer any rights or remedies upon any person other than the parties to this Agreement.

 Valve’s obligations are subject to existing laws and legal process and Valve may comply with law enforcement or regulatory requests or requirements notwithstanding any contrary term.

 You agree to comply with all applicable import/export laws and regulations. You agree not to export the Content and Services or Hardware or allow use of your Account by individuals of any terrorist supporting countries to which encryption exports are at the time of exportation restricted by the U.S. Bureau of Export Administration. You represent and warrant that you are not located in, under the control of, or a national or resident of any such prohibited country.

 This Agreement was last updated on August 28th, 2020 ("Revision Date"). If you were a Subscriber before the Revision Date, it replaces your existing agreement with Valve or Valve SARL on the day that it becomes effective according to Section 8 above.')
                  ?>

                </p>
              </div>
              <input type="checkbox" name="" value=""> <span class="text-bold">saya sudah membaca dan menyetujui syarat dan ketentuan yang diberikan</span>
              <input class=" mt-1 btn btn-success w-100" type="submit" name="SIMPAN" value="SIMPAN">

              <!-- <h4 class="mt-1">UserName</h4>
              <input type="text" class="form-control mt-s" name="username" id="username" value="">
              <h4 class="mt-1">Password</h4>
              <input id="inptPass" type="password" class="form-control mt-s" style="float:left" name="inptPass" value="">
              <div onclick="passVis()" style="float:right;margin-left:-95px;padding-right:10px;margin-top:9px;height:32px;padding-top:7px;">
                <i id="hide" class="fa fa-eye-slash"></i>
              </div>
              <h4 class="mt-3">Nama</h4>
              <input type="text" class="form-control mt-s" name="nama" id="nama" value="">
              <h4 class="mt-1">Email</h4>
              <input type="text" class="form-control mt-s" name="email" id="email" value="">
              <h4 class="mt-1">No HP</h4>
              <input type="text" class="form-control mt-s" name="telephone" id="telephone" value="">
              <h4 class="mt-1">Kode Admin </h4>
              <input type="text" class="form-control mt-s" name="kodeadmin" id="kodeadmin" value="">
              <h4 class="mt-1">Alamat</h4>
              <textarea name="alamat" id="alamat" class="form-control mt-s" rows="4" cols="80"></textarea>
              <button type="submit" class="btn mt-2 text-center w-100 btn-gradient" name="button">MASUK</button>
              <br>
              <h5 class="mt-1">sudah memiliki akun? <a style="color:#ff9191" href="/login">masuk lewat sini</a> </h5> -->

            </div>

          </form>
          </div>

        </div>

        <script type="text/javascript">
            var $fileInput = $('.file-input');
            var $droparea = $('.file-drop-area');

            // highlight drag area
            $fileInput.on('dragenter focus click', function() {
            $droparea.addClass('is-active');
            });

            // back to normal state
            $fileInput.on('dragleave blur drop', function() {
            $droparea.removeClass('is-active');
            });

            // change inner text
            $fileInput.on('change', function() {
            var filesCount = $(this)[0].files.length;
            var $textContainer = $(this).prev();

            if (filesCount === 1) {
            // if single file is selected, show file name
            var fileName = $(this).val().split('\\').pop();
            $textContainer.text(fileName);
            } else {
            // otherwise show number of files
            $textContainer.text(filesCount + ' file yang akan diunggah');
            }
            });
        </script>

@endsection
