<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JsonDirectController extends AbstractController
{
    /**
     * @Route("/json", name="json")
     */
    public function index(): Response
    {   $json ='{
        "dossier": {
            "id_rmbt": "160505000237",
            "date": "20/04/2016",
            "totalRmbt": "25",
            "benef_rglt": "M.RADENAC VINCENT",
            "ref_regl": "160505000237",
            "DetRmbt": [{
                    "id_rmbt": "160505000237",
                    "statut_libelle": "En attente de justificatif",
                    "date_acte": "30/04/2016",
                    "type_acte": "PH VIGNETTE BLANCHE (65%)",
                    "benef_soin": "M. RADENAC VINCENT",
                    "complement_cgam": "0,00",
                    "rembourse_secu": "2,98",
                    "autre_mutuelle": "0,00",
                    "taux_secu": "65",
                    "fraisReel": "4,59",
                    "reste_a_charge": "1,61",
                    "isBloque":"false"
                },
                {
                    "id_rmbt": "160505000237",
                    "statut_libelle": "En attente de justificatif",
                    "date_acte": "30/04/2016",
                    "type_acte": "PH HONORAIRES COND. NORMAL (65%)",
                    "benef_soin": "M. RADENAC VINCENT",
                    "complement_cgam": "0,00",
                    "rembourse_secu": "1,99",
                    "autre_mutuelle": "0,00",
                    "taux_secu": "65",
                    "fraisReel": "3,06",
                    "reste_a_charge": "1,07",
                    "isBloque":"false"
                },
                {
                    "id_rmbt": "160505000237",
                    "statut_libelle": "En attente de justificatif",
                    "date_acte": "15/06/2016",
                    "type_acte": "PH VIGNETTE BLANCHE (65%)",
                    "benef_soin": "M. RADENAC VINCENT",
                    "complement_cgam": "0,00",
                    "rembourse_secu": "8,74",
                    "autre_mutuelle": "0,00",
                    "taux_secu": "65",
                    "fraisReel": "13,45",
                    "reste_a_charge": "4,71",
                    "isBloque":"false"
                },
                {
                    "id_rmbt": "160505000237",
                    "statut_libelle": "En attente de justificatif",
                    "date_acte": "15/06/2016",
                    "type_acte": "PH HONORAIRES GRAND COND. (65%)",
                    "benef_soin": "M. RADENAC VINCENT",
                    "complement_cgam": "0,00",
                    "rembourse_secu": "1,79",
                    "autre_mutuelle": "0,00",
                    "taux_secu": "65",
                    "fraisReel": "2,76",
                    "reste_a_charge": "0,97",
                    "isBloque":"false"
                },
                {
                    "id_rmbt": "160505000237",
                    "statut_libelle": "",
                    "date_acte": "21/10/2016",
                    "type_acte": "",
                    "benef_soin": "M. RADENAC VINCENT",
                    "complement_cgam": "6,90",
                    "rembourse_secu": "16,10",
                    "autre_mutuelle": "0,00",
                    "taux_secu": "70",
                    "fraisReel": "23,00",
                    "reste_a_charge": "0,00",
                    "isBloque":"false"
                },
                {
                    "id_rmbt": "160505000237",
                    "statut_libelle": "En attente de justificatif",
                    "date_acte": "21/10/2016",
                    "type_acte": "PH VIGNETTE BLANCHE (65%)",
                    "benef_soin": "M. RADENAC VINCENT",
                    "complement_cgam": "0,00",
                    "rembourse_secu": "15,91",
                    "autre_mutuelle": "0,00",
                    "taux_secu": "65",
                    "fraisReel": "24,47",
                    "reste_a_charge": "8,56",
                    "isBloque":"false"
                },
                {
                    "id_rmbt": "160505000237",
                    "statut_libelle": "En attente de justificatif",
                    "date_acte": "21/10/2016",
                    "type_acte": "PH HONORAIRES COND. NORMAL (65%)",
                    "benef_soin": "M. RADENAC VINCENT",
                    "complement_cgam": "0,00",
                    "rembourse_secu": "0,66",
                    "autre_mutuelle": "0,00",
                    "taux_secu": "65",
                    "fraisReel": "1,02",
                    "reste_a_charge": "0,36",
                    "isBloque":"false"
                },
                {
                    "id_rmbt": "160505000237",
                    "statut_libelle": "En attente de justificatif",
                    "date_acte": "21/10/2016",
                    "type_acte": "PH VIGNETTE BLANCHE (65%)",
                    "benef_soin": "M. RADENAC VINCENT",
                    "complement_cgam": "0,00",
                    "rembourse_secu": "4,40",
                    "autre_mutuelle": "0,00",
                    "taux_secu": "65",
                    "fraisReel": "6,77",
                    "reste_a_charge": "2,37",
                    "isBloque":"false"
                },
                {
                    "id_rmbt": "160505000237",
                    "statut_libelle": "En attente de justificatif",
                    "date_acte": "21/10/2016",
                    "type_acte": "PH HONORAIRES COND. NORMAL (65%)",
                    "benef_soin": "M. RADENAC VINCENT",
                    "complement_cgam": "0,00",
                    "rembourse_secu": "0,66",
                    "autre_mutuelle": "0,00",
                    "taux_secu": "65",
                    "fraisReel": "1,02",
                    "reste_a_charge": "0,36",
                    "isBloque":"false"
                }
            ],
            "success": "true",
            "total": "0",
            "info": [{
                "variable": "idassure",
                "code": "REMB_0004",
                "libelle": "Liste des remboursements.",
                "gravite": "00"
            }]
        }
    }';
    return $this->json(json_decode($json),200);
    }
    
}
