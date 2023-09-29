<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $productCategory0=new ProductCategory();
        $productCategory0->name="Sin especificar";
        $productCategory0->description="No se tiene alguna clasificación especifica para el producto en cuestión.";
        $productCategory0->slug="sin-especificar";
        $productCategory0->save();

        $productCategory1=new ProductCategory();
        $productCategory1->name="Cereales";
        $productCategory1->description="Cultivos pertenecientes a la familia Poaceae o Gramíneas que normalmente se explotan en grandes extensiones y cuyos granos se caracterizan por su alto contenido en carbohidratos. Generalmente ese tipo de cultivo tiene un uso agroindustrial. Ejemplos: maíz, arroz o sorgo.";
        $productCategory1->slug="cereales";
        $productCategory1->save();

        $productCategory2=new ProductCategory();
        $productCategory2->name="Leguminosas";
        $productCategory2->description="Cultivos pertenecen a la familia Fabaceae o Leguminosae que normalmente se explotan en grandes extensiones y cuyos granos se caracterizan por su alto contenido en proteínas. Generalmente se usan para consumo directo (no sufren un procesamiento agroindustrial). Ejemplos: caraota, frijol, quinchoncho.";
        $productCategory2->slug="leguminosas";
        $productCategory2->save();

        $productCategory3=new ProductCategory();
        $productCategory3->name="Oleaginosas";
        $productCategory3->description="Cultivos mayoritariamente de ciclo corto, pertenecientes a varias familias taxonómicas que normalmente se explotan en grandes extensiones y de cuyos granos se extrae aceites. Este tipo tiene un uso exclusivamente agroindustrial. Ejemplos de ciclo corto: soja, girasol, ajonjolí; de ciclo largo: palma aceitera.";
        $productCategory3->slug="oleaginosas";
        $productCategory3->save();

        $productCategory4=new ProductCategory();
        $productCategory4->name="Hortalizas";
        $productCategory4->description="Este tipo de cultivo es mayoritariamente de ciclo corto, perteneciente a muchas familias taxonómicas, generalmente explotados en pequeñas superficies y que se comercializan para el consumo fresco de alguno de sus órganos (raíz, tallo, hoja, inflorescencia, fruto) que presentan un alto contenido de vitaminas, minerales y fibra. Ejemplos: tomate, pimentón, lechuga, zanahoria, brócoli.";
        $productCategory4->slug="hortalizas";
        $productCategory4->save();

        $productCategory5=new ProductCategory();
        $productCategory5->name="Frutales";
        $productCategory5->description="Cultivos mayoritariamente de ciclo largo, pertenecientes a muchas familias taxonómicas, generalmente explotados en grandes superficies y que se comercializan para el consumo fresco de sus frutos con alto contenido de vitaminas, minerales y fibra. Algunas especies de este tipo se utilizan para producción agroindustrial. Ejemplos: naranja, mango, aguacate, parchita, cambur, piña.";
        $productCategory5->slug="frutales";
        $productCategory5->save();

        $productCategory6=new ProductCategory();
        $productCategory6->name="Ornamentales";
        $productCategory6->description="Este tipo de cultivos se utilizan para la decoración y no son comercializados para la alimentación. Algunas son de ciclo corto y otras de ciclo largo. Mientras algunas se comercializan por sus flores, otras lo hacen por su follaje.";
        $productCategory6->slug="ornamentales";
        $productCategory6->save();

        $productCategory7=new ProductCategory();
        $productCategory7->name="Raíces y tubérculos";
        $productCategory7->description="Cultivos mayoritariamente de ciclo corto, algunos de agricultura intensiva y extensiva, que se comercializan para el consumo de sus raíces y tallos de alto contenido de carbohidratos. Ejemplos: papa, yuca, ocumo, ñame.";
        $productCategory7->slug="raices-y-tuberculos";
        $productCategory7->save();

        $productCategory8=new ProductCategory();
        $productCategory8->name="Cultivos para bebidas medicinales y aromáticas";
        $productCategory8->description="Especies cultivadas para obtener de ellas órganos vegetales que posteriormente se utilizan en infusiones, siendo la infusión un tipo de bebida obtenida a partir de la introducción de órganos vegetales en agua hirviendo. Es un grupo altamente variable en cuanto al ciclo de cultivo y al nivel de producción. Ejemplo: té, café, manzanilla, malojillo, menta, etc.";
        $productCategory8->slug="Cultivos-para-bebidas-medicinales-y-aromaticas";
        $productCategory8->save();

        $productCategory9=new ProductCategory();
        $productCategory9->name="Cultivos tropicales tradicionales";
        $productCategory9->description="Como el café, cacao, caña de azúcar y tabaco. Estos cuatro cultivos no tienen cosas en común, es más bien, una categoría de cultivos que no se pueden clasificar en las anteriores categorías. El café podría clasificarse en Frutales o cultivos para bebidas medicinales y aromáticas, mientras el cacao podría encontrarse en Frutales.";
        $productCategory9->slug="cultivos-tropicales-tradicionales";
        $productCategory9->save();

        $productCategory10=new ProductCategory();
        $productCategory10->name="Pastos";
        $productCategory10->description="Este tipo de cultivo es mayoritariamente de ciclo largo, utilizado para alimentar al ganado mediante el consumo de sus hojas. Se pueden ofrecer al animal directamente en el campo con la implementación de diferentes prácticas de manejo de pastos (potreros o pastizales) o pueden ser pastos de corte, es decir, se corta el follaje, se seca y se empaqueta (heno) o se somete a un proceso de fermentación (ensilaje). El heno y el ensilaje se usan para tener pasto para ofrecer al animal en épocas donde es difícil tener pasto en el potrero (en nuestro país en época de sequía, en otros países en invierno).";
        $productCategory10->slug="pastos";
        $productCategory10->save();

        


        // Sirve para que se generen aleatoriamente x cantidad de registros indicados.
        // ProductCategory::factory(10)->create();
    }
}
