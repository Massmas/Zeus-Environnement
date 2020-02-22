package Controller;

public class agent {
	
	private String nomA, prenomA, login, mdp, adresse, codepostal, ville, dateDebutContrat, dateFinContrat;
	private int idA;
	
	
	public agent()
	{
		this.nomA = this.prenomA = this.login= this.mdp = this.adresse = this.codepostal = this.ville = this.dateDebutContrat = this.dateFinContrat = "";
		this.idA = 0;
	}
	
	
	

	public agent(String nomA, String prenomA, String login, String mdp, String adresse, String codepostal, String ville, String dateDebutContrat, String dateFinContrat)
	{
		super();
		this.nomA=nomA;
		this.prenomA=prenomA;
		this.login=login;
		this.mdp=mdp;
		this.adresse=adresse;
		this.codepostal=codepostal;
		this.ville=ville;
		this.dateDebutContrat=dateDebutContrat;
		this.dateFinContrat=dateFinContrat;
	}
	
	public agent(int idA, String nomA, String prenomA, String login, String mdp, String adresse, String codepostal, String ville, String dateDebutContrat, String dateFinContrat)
	{
		this.idA=idA;
		this.nomA=nomA;
		this.prenomA=prenomA;
		this.login=login;
		this.mdp=mdp;
		this.adresse=adresse;
		this.codepostal=codepostal;
		this.ville=ville;
		this.dateDebutContrat=dateDebutContrat;
		this.dateFinContrat=dateFinContrat;
	}
	
	public agent(int idA, String nomA, String prenomA, String adresse, String codepostal, String ville, String dateDebutContrat, String dateFinContrat)
	{
		this.idA=idA;
		this.nomA=nomA;
		this.prenomA=prenomA;
		this.adresse=adresse;
		this.codepostal=codepostal;
		this.ville=ville;
		this.dateDebutContrat=dateDebutContrat;
		this.dateFinContrat=dateFinContrat;
	}
	
	
	
	/*
	 * Getters & Setters
	 */


	public String getAdresse() {
		return adresse;
	}




	public void setAdresse(String adresse) {
		this.adresse = adresse;
	}




	public String getNomA() {
		return nomA;
	}


	public void setNomA(String nomA) {
		this.nomA = nomA;
	}


	public String getPrenomA() {
		return prenomA;
	}


	public void setPrenomA(String prenomA) {
		this.prenomA = prenomA;
	}


	public String getLogin() {
		return login;
	}


	public void setLogin(String login) {
		this.login = login;
	}


	public String getMdp() {
		return mdp;
	}


	public void setMdp(String mdp) {
		this.mdp = mdp;
	}


	public String getVille() {
		return ville;
	}


	public void setVille(String ville) {
		this.ville = ville;
	}


	public String getDateDebutContrat() {
		return dateDebutContrat;
	}


	public void setDateDebutContrat(String dateDebutContrat) {
		this.dateDebutContrat = dateDebutContrat;
	}


	public String getDateFinContrat() {
		return dateFinContrat;
	}


	public void setDateFinContrat(String dateFinContrat) {
		this.dateFinContrat = dateFinContrat;
	}


	public String getCodepostal() {
		return codepostal;
	}


	public void setCodepostal(String codepostal) {
		this.codepostal = codepostal;
	}


	public int getIdA() {
		return idA;
	}


	public void setIdA(int idA) {
		this.idA = idA;
	}

}
