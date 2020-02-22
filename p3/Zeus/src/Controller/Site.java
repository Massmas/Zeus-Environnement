package Controller;

public class Site {
	
	private int idS, codePostalS;
	private String nomS, villeS;
	
	public Site(){
		this.idS = this.codePostalS = 0;
		this.nomS = this.villeS = "";
	}

	
	
	
	
	
	/*
	 * Getters & Setters
	 */
	public int getIdS() {
		return idS;
	}

	public void setIdS(int idS) {
		this.idS = idS;
	}

	public int getCodePostalS() {
		return codePostalS;
	}

	public void setCodePostalS(int codePostalS) {
		this.codePostalS = codePostalS;
	}

	public String getNomS() {
		return nomS;
	}

	public void setNomS(String nomS) {
		this.nomS = nomS;
	}

	public String getVilleS() {
		return villeS;
	}

	public void setVilleS(String villeS) {
		this.villeS = villeS;
	}
	
	

}
