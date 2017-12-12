class Pro_produit{
    private $pro_id;
    private $pro_url;
    private $pro_createur;
    private $pro_date_modif;
    private $pro_nom;
    private $prom_marque;
    private $pro_pays;
    private $pro_ingredients_huile_olive;
    private $pro_grade_nutritionnel;
    private $pro_energie;
    private $pro_gras;
    private $pros_gras_sature;
    private $pro_gras_trans;
    private $pro_cholesterol;
    private $pro_carbohydrates;
    private $pro_sucres;
    private $pro_fibre;
    private $pro_proteines;
    private $pro_sel;
    private $pro_sodium;
    private $pro_vitamine_a;
    private $pro_calcium;
    private $pro_fer;
    private $pro_nutrition_score;
    private $pro_quantite;

    public function __construct($pro_id=NULL,$pro_url=NULL,$pro_createur=NULL,$pro_date_modif=NULL,$pro_nom=NULL,$prom_marque=NULL,$pro_pays=NULL,$pro_ingredients_huile_olive=NULL,$pro_grade_nutritionnel=NULL,$pro_energie=NULL,$pro_gras=NULL,$pros_gras_sature=NULL,$pro_gras_trans=NULL,$pro_cholesterol=NULL,$pro_carbohydrates=NULL,$pro_sucres=NULL,$pro_fibre=NULL,$pro_proteines=NULL,$pro_sel=NULL,$pro_sodium=NULL,$pro_vitamine_a=NULL,$pro_calcium=NULL,$pro_fer=NULL,$pro_nutrition_score=NULL,$pro_quantite=NULL){
        $this->pro_id = $pro_id;
        $this->pro_url = $pro_url;
        $this->pro_createur = $pro_createur;
        $this->pro_date_modif = $pro_date_modif;
        $this->pro_nom = $pro_nom;
        $this->pro_marque = $prom_marque;
        $this->pro_pays = $pro_pays;
        $this->pro_ingredients_huile_olive = $pro_ingredients_huile_olive;
        $this->pro_grade_nutritionnel = $pro_grade_nutritionnel;
        $this->pro_energie = $pro_energie;
        $this->pro_gras = $pro_gras;
        $this->pros_gras_sature = $pros_gras_sature;
        $this->pro_gras_trans = $pro_gras_trans;
        $this->pro_cholesterol = $pro_cholesterol;
        $this->pro_carbohydrates = $pro_carbohydrates;
        $this->pro_sucres = $pro_sucres;
        $this->pro_fibre = $pro_fibre;
        $this->pro_proteines = $pro_proteines;
        $this->pro_sel = $pro_sel;
        $this->pro_sodium = $pro_sodium;
        $this->pro_vitamine_a = $pro_vitamine_a;
        $this->pro_calcium = $pro_calcium;
        $this->pro_fer = $pro_fer;
        $this->pro_nutrition_score = $pro_nutrition_score;
        $this->pro_quantite = $pro_quantite;
    }

    public function Getpro_id(){
	return $this->pro_id;
    }
    public function Getpro_url(){
	 return $this->pro_url;
    }
    public function Getpro_createur(){
	 return $this->pro_createur;
    }
    public function Getpro_date_modif(){
	 return $this->pro_date_modif;
    }
    public function Getpro_nom(){
	 return $this->pro_nom;
    }
    public function Getprom_marque(){
	 return $this->prom_marque;
    }
    public function Getpro_pays(){
	 return $this->pro_pays;
    }
    public function Getpro_ingredients_huile_olive(){
	 return $this->pro_ingredients_huile_olive;
    }
    public function Getpro_grade_nutritionnel(){
	 return $this->pro_grade_nutritionnel;
    }
    public function Getpro_energie(){
	 return $this->pro_energie;
    }
    public function Getpro_gras(){
	 return $this->pro_gras;
    }
    public function Getpros_gras_sature(){
	 return $this->pros_gras_sature;
    }
    public function Getpro_gras_trans(){
	 return $this->pro_gras_trans;
    }
    public function Getpro_cholesterol(){
	 return $this->pro_cholesterol;
    }
    public function Getpro_carbohydrates(){
	 return $this->pro_carbohydrates;
    }
    public function Getpro_sucres(){
	 return $this->pro_sucres;
    }
    public function Getpro_fibre(){
	 return $this->pro_fibre;
    }
    public function Getpro_proteines(){
	 return $this->pro_proteines;
    }
    public function Getpro_sel(){
	 return $this->pro_sel;
    }
    public function Getpro_sodium(){
	 return $this->pro_sodium;
    }
    public function Getpro_vitamine_a(){
	 return $this->pro_vitamine_a;
    }
    public function Getpro_calcium(){
	 return $this->pro_calcium;
    }
    public function Getpro_fer(){
	 return $this->pro_fer;
    }
    public function Getpro_nutrition_score(){
	 return $this->pro_nutrition_score;
    }
    public function Getpro_quantite(){
	 return $this->pro_quantite;
    }

    public function Setpro_id($pro_id){
	$this->pro_id = $pro_id;
    }
    public function Setpro_url($pro_url){
	 $this->pro_url = $pro_url;
    }
    public function Setpro_createur($pro_createur){
	 $this->pro_createur = $pro_createur;
    }
    public function Setpro_date_modif($pro_date_modif){
	 $this->pro_date_modif = $pro_date_modif;
    }
    public function Setpro_nom($pro_nom){
	 $this->pro_nom = $pro_nom;
    }
    public function Setprom_marque($pro_marque){
	 $this->prom_marque = $prom_marque;
    }
    public function Setpro_pays($pro_pays){
	 $this->pro_pays = $pro_pays;
    }
    public function Setpro_ingredients_huile_olive($pro_ingredients_huile_olive){
	 $this->pro_ingredients_huile_olive = $pro_ingredients_huile_olive;
    }
    public function Setpro_grade_nutritionnel($pro_grade_nutritionnel){
	 $this->pro_grade_nutritionnel = $pro_grade_nutritionnel;
    }
    public function Setpro_energie($pro_energie){
	 $this->pro_energie = $pro_energie;
    }
    public function Setpro_gras($pro_gras){
	 $this->pro_gras = $pro_gras;
    }
    public function Setpros_gras_sature($pros_gras_sature){
	 $this->pros_gras_sature = $pros_gras_sature;
    }
    public function Setpro_gras_trans($pro_gras_trans){
	 $this->pro_gras_trans = $pro_gras_trans;
    }
    public function Setpro_cholesterol($pro_cholesterol){
	 $this->pro_cholesterol = $pro_cholesterol;
    }
    public function Setpro_carbohydrates($pro_carbohydrates){
	 $this->pro_carbohydrates = $pro_carbohydrates;
    }
    public function Setpro_sucres($pro_sucres){
	 $this->pro_sucres = $pro_sucres;
    }
    public function Setpro_fibre($pro_fibre){
	 $this->pro_fibre = $pro_fibre;
    }
    public function Setpro_proteines($pro_proteines){
	 $this->pro_proteines = $pro_proteines;
    }
    public function Setpro_sel($pro_sel){
	 $this->pro_sel = $pro_sel;
    }
    public function Setpro_sodium($pro_sodium){
	 $this->pro_sodium = $pro_sodium;
    }
    public function Setpro_vitamine_a($pro_vitamine_a){
	 $this->pro_vitamine_a = $pro_vitamine_a;
    }
    public function Setpro_calcium($pro_calcium){
	 $this->pro_calcium = $pro_calcium;
    }
    public function Setpro_fer($pro_fer){
	 $this->pro_fer = $pro_fer;
    }
    public function Setpro_nutrition_score($pro_nutrition_score){
	 $this->pro_nutrition_score = $pro_nutrition_score;
    }
    public function Setpro_quantite($pro_quantite){
	 $this->pro_quantite = $pro_quantite;
    }
}

class Pro_produit_manager{

	private $db;
	
	public function __construct(){
		$this->db = DbConnect.getConnexion();
	}

	public function ListPro_produit(){
		$query = $this->db->prepare('SELECT * FROM pro_produit');
		$result = $query->execute();
		$tabResult = array();
		while($result = $query->fetch(PDO::FETCH_ASSOC)){
			array_push($tabResult, new Pro_produit($result));
		}
		return $tabResult;
	}
}